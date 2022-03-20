<div class="input-group">
    <input
        type="text"
        id="<?php echo e($this->getId('date')); ?>"
        class="form-control"
        autocomplete="off"
        value="<?php echo e($value ? $value->format($dateFormat) : null); ?>"
        <?php echo $field->getAttributes(); ?>

        <?php echo $this->previewMode ? 'readonly="readonly"' : ''; ?>

        data-control="datepicker"
        <?php if($startDate): ?> data-start-date="<?php echo e($startDate); ?>" <?php endif; ?>
        <?php if($endDate): ?> data-end-date="<?php echo e($endDate); ?>" <?php endif; ?>
        <?php if($datesDisabled): ?> data-dates-disabled="<?php echo e($datesDisabled); ?>" <?php endif; ?>
        data-format="<?php echo e($datePickerFormat); ?>"
        data-language=<?php echo e(setting('default_language')); ?>

    />
    <input
        type="hidden"
        name="<?php echo e($field->getName()); ?>"
        value="<?php echo e($value ? $value->format($dateFormat) : null); ?>"
        data-datepicker-value
    />
    <div class="input-group-append">
        <span class="input-group-icon"><i class="fa fa-calendar-o"></i></span>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/admin/formwidgets/datepicker/picker_date.blade.php ENDPATH**/ ?>