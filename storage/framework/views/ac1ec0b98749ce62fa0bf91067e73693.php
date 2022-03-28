
<?php echo controller()->renderComponent('slider'); ?>

<?php echo controller()->renderComponent('featuredItems'); ?>

<?php header('Location: ' . site_url('main/menus')); die(); ?>