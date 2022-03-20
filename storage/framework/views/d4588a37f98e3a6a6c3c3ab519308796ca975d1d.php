<div class="py-2">
    <p class="lead"><?php echo e($formModel->location->location_name); ?></p>
    <?php echo format_address($formModel->location->getAddress()); ?>

</div>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/admin/views/orders/form/field_location.blade.php ENDPATH**/ ?>