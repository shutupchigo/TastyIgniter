<div class="row-fluid">
    <?php echo form_open([
        'id'     => 'edit-form',
        'role'   => 'form',
        'method' => 'PATCH',
    ]); ?>


    <?php echo $this->renderForm(); ?>


    <?php echo form_close(); ?>

</div>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/admin/views/mealtimes/edit.blade.php ENDPATH**/ ?>