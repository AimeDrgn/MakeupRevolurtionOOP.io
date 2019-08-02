<?php include THEME_PATH . 'header.php' ?>

<?php if ($slider ?? false): ?>
    <?php include THEME_PATH . "slider.php"; ?>
<?php endif; ?>
              <!--  <?php /*if (file_exists($view)) : */?>
                    --><?php /*include $view; */?>
                <?php ?>
                    View : <?= $view ?> not found!
                <?php ?>
                <?php include ROOT_PATH . "theme" . DIRECTORY_SEPARATOR . 'sidebar.php' ?>

<?php include THEME_PATH . 'footer.php' ?>
