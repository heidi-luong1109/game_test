<header>
    <div id="menu-toggle">
        <div id="menu_button">
            <input type="checkbox" id="menu_checkbox">
            <label for="menu_checkbox" id="menu_label">
                <div id="menu_text_bar"></div>
            </label>
        </div>

        <ul id="header-menu">
            <li class="d-md-block d-lg-none"><a href="#">Games</a></li>
            <li><a href="<?php echo e(url('bonus')); ?>">Bonus</a></li>
            <li><a href="<?php echo e(url('promotions')); ?>">Promotions</a></li>
            <li><a href="#">About Us</a></li>
            <li class="d-md-block d-lg-none"><a href="javascript:fn_deposit('<?php echo e(Auth::check()); ?>')">Deposit</a></li>
            <?php if(Auth::check()): ?>
            <li class="d-md-block d-lg-none"><a href="<?php echo e(route('frontend.profile.balance')); ?>">MY Account</a></li>
            <li><a href="<?php echo e(route('frontend.auth.logout')); ?>">Sign Out</a></li>
            <?php else: ?>
            <li class="d-md-block d-lg-none"><a href="#signup-modal">Sign Up</a></li>
            <li class="d-md-block d-lg-none"><a href="#signin-modal">Sign In</a></li>
            <?php endif; ?>
        </ul>
        <span class="d-md-flex d-none">Menu</span>
    </div>
    <div class="header-content">
        <div class="logo">
            <a href="/" class="d-md-flex d-none">
                <img src="<?php echo e(asset('frontend/Page/image/logo.png')); ?>" />
            </a>
            <a href="/" class="d-md-none d-flex">
                <img src="<?php echo e(asset('frontend/Page/image/mobile-logo.png')); ?>" />
            </a>
        </div>
        <div class="account-header-menu d-flex">
            <div class="account-header-menu-item d-none d-sm-none d-md-none d-lg-block">
                <a href="javascript:fn_deposit('<?php echo e(Auth::check()); ?>')">
                    <img src="<?php echo e(asset('frontend/Page/image/deposit-icon.png')); ?>" />
                    <span>deposit</span>
                </a>
            </div>
            <?php if(!Auth::check()): ?>
            <div class="account-header-menu-item">
                <a href="#signup-modal">
                    <img class="d-md-flex d-none" src="<?php echo e(asset('frontend/Page/image/signup-icon.png')); ?>" />
                    <span>sign up</span>
                </a>
            </div>
            <div class="account-header-menu-item">
                <a href="#signin-modal">
                    <img class="d-md-flex d-none" src="<?php echo e(asset('frontend/Page/image/signin-icon.png')); ?>" />
                    <span>sign in</span>
                </a>
            </div>
            <?php else: ?>
            <div class="account-header-menu-item">
                <a href="<?php echo e(route('frontend.profile.balance')); ?>" data-ol-has-click-handler>
                    <img src="<?php echo e(asset('frontend/Page/image/signin-icon.png')); ?>" />
                    <span>my account</span>
                </a>
            </div>
            <?php endif; ?>
            <div class="account-header-menu-item d-none d-sm-none d-md-none d-lg-block">
                <a href="#">
                    <span>games</span>
                </a>
            </div>
        </div>
    </div>
</header>
<?php /**PATH E:\Task\Casino-Engine\resources\views/component/frontend/layout/header.blade.php ENDPATH**/ ?>