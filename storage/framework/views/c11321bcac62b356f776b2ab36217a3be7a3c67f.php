<div id="list-items">
    <?php
        $countItems = count($updates['items']);
        $countIgnored = count($updates['ignoredItems']);
    ?>
    <?php if($countItems): ?>
        <div class="p-3 border-bottom">
            <b>
                <i class="fa fa-cloud-download fa-fw"></i>&nbsp;&nbsp;
                <?php echo e(sprintf(lang('system::lang.updates.text_update_found'), $countItems)); ?>

            </b>
        </div>

        <?php echo $this->makePartial('updates/list_items', ['items' => $updates['items'], 'ignored' => FALSE]); ?>

    <?php endif; ?>

    <?php if($countIgnored): ?>
        <div class="panel-heading">
            <b>
                <i class="fa fa-times-circle fa-fw"></i>&nbsp;&nbsp;
                <?php echo e(sprintf(lang('system::lang.updates.text_update_ignored'), $countIgnored)); ?>

            </b>
        </div>

        <?php echo $this->makePartial('updates/list_items', ['items' => $updates['ignoredItems'], 'ignored' => TRUE]); ?>

    <?php endif; ?>

</div>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/system/views/updates/list.blade.php ENDPATH**/ ?>