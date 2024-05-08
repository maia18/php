<h1>List of cities:</h1>

<ul>
    <?php foreach($entries AS $city): ?>
        <li>
            <a href="city.php?<?php echo http_build_query(['id' => $city->id]); ?>">
                <?php echo e($city->getCityWithCountry()); ?>
                <?php /* <?php echo e($city->getFlag()); ?> */ ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>