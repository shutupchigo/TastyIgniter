<div class="input-group flex-fill">
    <input
        type="text"
        name="<?php echo e($searchBox->getName()); ?>"
        class="form-control <?php echo e($cssClasses); ?>"
        value="<?php echo e($value); ?>"
        placeholder="<?php echo e($placeholder); ?>"
        autocomplete="off"
    />
    <div class="input-group-append">
        <button
            class="btn btn-light"
            type="submit"
            data-request="<?php echo e($searchBox->getEventHandler('onSubmit')); ?>"
        >
            <i class="fa fa-search"></i>
        </button>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/admin/widgets/searchbox/searchbox.blade.php ENDPATH**/ ?>