<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';

?>
<?php include './views/header.php'; ?>

<?php foreach($imageTitles AS $src => $title): ?>
    <a href="image.php?<?php echo http_build_query(['image' => $src]); ?>">
        <h3><?php echo e($title); ?></h3>
        <img src="./images/<?php echo rawurlencode($src); ?>" alt="<?php echo e($title); ?>" />
    </a>
<?php endforeach; ?>

<?php include './views/footer.php'; ?>
