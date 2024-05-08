<?php
require __DIR__ . '/inc/functions.inc.php'; 

$city = null;
if (!empty($_GET['city'])) {
    $city = $_GET['city'];
}

$filename = null;
$cityInformation = [];
if (!empty($city)) {
    $cities = json_decode(
        file_get_contents(__DIR__ . '/../data/index.json'),
        true
    );
    foreach ($cities AS $currentCity) {
        if ($currentCity['city'] === $city) {
            $filename = $currentCity['filename'];
            $cityInformation = $currentCity;
            break;
        }
    }
}

if (!empty($filename)) {
    $results = json_decode(
        file_get_contents('compress.bzip2://' . __DIR__ . '/../data/' . $filename),
        true
    )['results'];

    $units = [
        'pm25' => null,
        'pm10' => null
    ];
    foreach ($results AS $result) {
        if (!empty($units['pm25']) && !empty($units['pm10'])) break;
        if ($result['parameter'] === 'pm25') {
            $units['pm25'] = $result['unit'];
        }
        if ($result['parameter'] === 'pm10') {
            $units['pm10'] = $result['unit'];
        }
    }

    $stats = [];
    foreach ($results AS $result) {
        if ($result['parameter'] !== 'pm25' && $result['parameter'] !== 'pm10') continue;
        if ($result['value'] < 0) continue;

        $month = substr($result['date']['local'], 0, 7);
        if (!isset($stats[$month])) {
            $stats[$month] = [
                'pm25' => [],
                'pm10' => []
            ];
        }

        $stats[$month][$result['parameter']][] = $result['value'];
        // var_dump($stats);
        // var_dump($month);
        // break;
    }
    // var_dump($stats);
}

?>

<?php require __DIR__ . '/views/header.inc.php'; ?>
<?php if (empty($city)): ?>
    <p>The city could not be loaded.</p>
<?php else: ?>
    <h1><?php echo e($cityInformation['city']); ?> <?php echo e($cityInformation['flag']); ?></h1>
    <?php if (!empty($stats)): ?>
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>PM 2.5 concentration</th>
                    <th>PM 10 concentration</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($stats AS $month => $measurements): ?>
                    <tr>
                        <th><?php echo e($month); ?></th>
                        <td>
                            <?php echo e(round(array_sum($measurements['pm25']) / count($measurements['pm25']), 2)); ?>
                            <?php echo e($units['pm25']); ?>
                        </td>
                        <td>
                            <?php echo e(round(array_sum($measurements['pm10']) / count($measurements['pm10']), 2)); ?>
                            <?php echo e($units['pm10']); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php endif; ?>

<?php require __DIR__ . '/views/footer.inc.php'; ?>
