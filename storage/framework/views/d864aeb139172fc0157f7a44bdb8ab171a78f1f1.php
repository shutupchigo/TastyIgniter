<ol class="breadcrumb">
    <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key == count($breadcrumbs) - 1): ?>
            <li class="breadcrumb-item active"><?php echo $breadcrumb['name']; ?></li>
        <?php else: ?>
            <li class="breadcrumb-item"><?php echo $breadcrumb['name']; ?></li>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/main/widgets/mediamanager/breadcrumb.blade.php ENDPATH**/ ?>