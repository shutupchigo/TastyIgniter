<?php
    $userPanel = \Admin\Classes\UserPanel::forUser();
?>
<li class="nav-item dropdown">
    <a href="#" class="nav-link" data-toggle="dropdown">
        <img
            class="rounded-circle"
            src="<?php echo e($userPanel->getAvatarUrl().'&s=64'); ?>"
        >
    </a>
    <div class="dropdown-menu">
        <div class="d-flex flex-column w-100 align-items-center">
            <div class="pt-4 px-4 pb-2">
                <img class="rounded-circle" src="<?php echo e($userPanel->getAvatarUrl().'&s=64'); ?>">
            </div>
            <div class="pb-3 text-center">
                <div class="text-uppercase"><?php echo e($userPanel->getUserName()); ?></div>
                <div class="text-muted"><?php echo e($userPanel->getRoleName()); ?></div>
            </div>
        </div>
        <div class="px-3 pb-3">
            <form method="POST" accept-charset="UTF-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text<?php echo e($userPanel->hasActiveLocation() ? ' text-info' : ' text-muted'); ?>">
                            <i class="fa fa-map-marker fa-fw"></i>
                        </div>
                    </div>
                    <?php if(count($userPanel->listLocations()) <= 1): ?>
                        <input
                            type="text"
                            class="form-control-static"
                            value="<?php echo e($userPanel->getLocationName()); ?>"
                        />
                    <?php else: ?>
                        <select
                            name="location"
                            class="form-control"
                            data-request="<?php echo e($this->getEventHandler('onChooseLocation')); ?>"
                        >
                            <option value="0"><?php echo app('translator')->get('admin::lang.text_all_locations'); ?></option>
                            <?php $__currentLoopData = $userPanel->listLocations(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
                                    value="<?php echo e($location->id); ?>"
                                    <?php echo e($location->active ? 'selected="selected"' : ''); ?>

                                ><?php echo e($location->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    <?php endif; ?>
                </div>
            </form>
        </div>
        <div role="separator" class="dropdown-divider"></div>
        <?php $__currentLoopData = $item->options(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a class="dropdown-item <?php echo e($item->cssClass); ?>" <?php echo Html::attributes($item->attributes); ?>>
                <i class="<?php echo e($item->iconCssClass); ?>"></i><span><?php echo app('translator')->get($item->label); ?></span>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item text-black-50" href="https://tastyigniter.com/about" target="_blank">
            <i class="fa fa-info-circle fa-fw"></i><?php echo app('translator')->get('admin::lang.text_about_tastyigniter'); ?>
        </a>
        <a class="dropdown-item text-black-50" href="https://tastyigniter.com/docs" target="_blank">
            <i class="fa fa-book fa-fw"></i><?php echo app('translator')->get('admin::lang.text_documentation'); ?>
        </a>
        <a class="dropdown-item text-black-50" href="https://forum.tastyigniter.com" target="_blank">
            <i class="fa fa-users fa-fw"></i><?php echo app('translator')->get('admin::lang.text_community_support'); ?>
        </a>
    </div>
</li>
<?php /**PATH /Applications/MAMP/htdocs/loasis_online_order/app/admin/views/_partials/top_nav_user_menu.blade.php ENDPATH**/ ?>