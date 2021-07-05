<section id="category-section">
    <div class="top-category-list d-none d-md-block">
        <?php if( settings('use_all_categories') ): ?>
            <a href="<?php echo e(route('frontend.game.list.category', 'all')); ?>" class="<?php if($currentSliderNum != -1 && $currentSliderNum == 'all'): ?> active <?php endif; ?>">
                <img src="<?php echo e(asset('frontend/Page/image/icon')); ?>/Game lobby.png" alt="">
                <span class="mt-1"><?php echo app('translator')->get('app.all'); ?></span>
            </a>
        <?php endif; ?>
        <?php if($categories): ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($category->position < 6 &&  $category->icon): ?>
                    <a href="<?php echo e(route('frontend.game.list.category', $category->href)); ?>" class="<?php if($currentSliderNum != -1 && $category->href == $currentSliderNum): ?> active <?php endif; ?>">
                        <img src="<?php echo e(asset('frontend/Page/image/icon')); ?>/<?php echo e($category->icon); ?>" alt="">
                        <span class="mt-1"><?php echo e($category->title); ?></span>
                    </a>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
    <div class="mobile-top-category d-block d-md-none">
        <div class="mobile-top-category-list">
            <?php if( settings('use_all_categories') ): ?>
                <a href="<?php echo e(route('frontend.game.list.category', 'all')); ?>" class="<?php if($currentSliderNum != -1 && $currentSliderNum == 'all'): ?> active <?php endif; ?>"><?php echo app('translator')->get('app.all'); ?></a>
            <?php endif; ?>
            <?php if($categories): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($category->position < 7): ?>
                        <a href="<?php echo e(route('frontend.game.list.category', $category->href)); ?>" class="<?php if($currentSliderNum != -1 && $category->href == $currentSliderNum): ?> active <?php endif; ?>"><?php echo e($category->title); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
    <form method="GET">
    <div class="search-box">
        <input type="text" name="search_game" placeholder="Find Your Game" value="<?php echo e($search_game); ?>" />
        <svg
        xmlns='http://www.w3.org/2000/svg'
        width='14'
        height='14'
        viewBox='0 0 14 14'
        >
        <path
        data-name='_ionicons_svg_ios-search (5)'
        d='M77.845,76.9l-3.9-3.932a5.553,5.553,0,1,0-.843.854l3.871,3.906a.6.6,0,0,0,.846.022A.6.6,0,0,0,77.845,76.9Zm-8.26-3.031a4.384,4.384,0,1,1,3.1-1.284A4.358,4.358,0,0,1,69.586,73.865Z'
        transform='translate(-64 -63.9)'
        fill='currentColor'
        />
    </svg>
    </div>
    </form>
    <div class="category-toggle-button dropdown">
        <button class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">game provider</button>
        <div class="dropdown-menu dropdown-large">
            <ul>
                <?php if($categories): ?>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($category->position >5): ?>
                        <li><a href="<?php echo e(route('frontend.game.list.category', $category->href)); ?>" class="<?php if($currentSliderNum != -1 && $category->href == $currentSliderNum): ?> active <?php endif; ?>"><?php echo e($category->title); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</section>
<?php /**PATH F:\xampp7.2\htdocs\casino_engine\resources\views/component/frontend/layout/category.blade.php ENDPATH**/ ?>