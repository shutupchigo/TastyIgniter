<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(in_array($category->getKey(), $hiddenCategories)) continue; ?>
    <?php if($hideEmptyCategory && $category->count_menus < 1) continue; ?>

    <li class="nav-item">
        <a
            class="nav-link font-weight-bold<?php echo e(($selectedCategory && $category->permalink_slug == $selectedCategory->permalink_slug) ? ' active' : ''); ?>"
            href="<?php echo e(page_url('local/menus', ['category' => $category->permalink_slug])); ?>"
        ><?php echo e($category->name); ?></a>

        <?php if((!isset($displayAsFlatTree) || !$displayAsFlatTree) && count($category->children)): ?>
            <ul class="nav flex-column ml-3 my-1">
                <?php echo controller()->renderPartial('@items', ['categories' => $category->children]); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

