<div
    class="btn-group btn-group-toggle w-100 text-center"
    data-toggle="buttons"
    data-control="order-type-toggle"
    data-handler="<?php echo e($orderTypeEventHandler); ?>"
>
    <?php $__currentLoopData = $locationOrderTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($orderType->isDisabled()) continue; ?>
        <?php
            $openingTime = make_carbon($orderType->getSchedule()->getOpenTime());
        ?>
        <label class="btn btn-light w-50 <?php echo e($orderType->isActive() ? 'active' : ''); ?>">
            <input
                type="radio"
                name="order_type"
                value="<?php echo e($orderType->getCode()); ?>"
                <?php echo $orderType->isActive() ? 'checked="checked"' : ''; ?>

            />&nbsp;&nbsp;
            <strong><?php echo e($orderType->getLabel()); ?></strong>
            <span
                class="small center-block">
                <?php if($orderType->getSchedule()->isOpen()): ?>
                    <?php echo sprintf(lang('igniter.local::default.text_in_min'), $orderType->getLeadTime()); ?>

                <?php elseif($orderType->getSchedule()->isOpening()): ?>
                    <?php echo sprintf(lang('igniter.local::default.text_starts'), $openingTime->isoFormat($openingTimeFormat)); ?>

                <?php else: ?>
                    <?php echo app('translator')->get('igniter.cart::default.text_is_closed'); ?>
                <?php endif; ?>
            </span>
        </label>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php if($location->orderTypeIsDelivery()): ?>
    <p class="text-muted text-center my-2">
        <?php if($minOrderTotal = $location->minimumOrder($cart->subtotal())): ?>
            <?php echo app('translator')->get('igniter.local::default.text_min_total'); ?>: <?php echo e(currency_format($minOrderTotal)); ?>

        <?php else: ?>
            <?php echo app('translator')->get('igniter.local::default.text_no_min_total'); ?>
        <?php endif; ?>
    </p>
<?php endif; ?>

