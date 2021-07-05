<?php $__env->startSection('slider'); ?>
<section id="hero-section">
    <iframe class="d-none d-sm-block" style="overflow:hidden !important; height:450px; padding:0px !important; margin:0px !important; border: none !important;" width="100%" src="https://canada777.com/slides/slide.php" allowfullscreen scrolling="no"></iframe>
    <img src="<?php echo e(asset('frontend/Page/image/mobile-hero-image.jpg')); ?>" alt="" class="w-100 d-block d-sm-none" />
    <a href="#signup-modal" class="d-block d-sm-none hero-sign-up-button">sign up</a>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<section id="game-list">
    <!-- GAMES - BEGIN -->
    <div class="section-title">
        <h3><?php echo e($currentListTitle); ?> Games</h3>
    </div>
    <div class="game-category-section">
        <div class="section-content" id="section-game">
        <?php if($games && count($games)): ?>
            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="game-item">
                <img data-original="<?php echo e(asset('frontend/Default/ico/')); ?>/<?php echo e($game->name.'.jpg'); ?>" />
                <div class="game-overlay">
                    <?php if(Auth::check()): ?>
                    <a href="<?php echo e(route('frontend.game.go', $game->name)); ?>">Play For Real</a>
                    <?php else: ?>
                    <a href="javascript:fn_playreal_auth()">Play For Real</a>
                    <?php endif; ?>
                    <a href="<?php echo e(route('frontend.game.go.prego', ['game'=>$game->name, 'prego'=>'Pre_go'])); ?>">Play For Fun</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
    </div>
    <?php if(!$search_game): ?>
    <div style="text-align: center; margin: 20px;">
        <button id="btn_loadmore_game" onclick="fn_loadmore('GAME','<?php echo e($currentListTitle); ?>')" class="btn btn-outline-secondary btn-lg">Load More</button>
    </div>
    <?php endif; ?>
    <?php if($currentSliderNum != "hot"): ?>
    <div class="section-title">
        <h3>Hot Games</h3>
    </div>
    <div class="game-category-section">
        <div class="section-content" id="section-hot">
        <?php if($hotgames && count($hotgames)): ?>
            <?php $__currentLoopData = $hotgames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$hotgame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="game-item">
                <img data-original="<?php echo e(asset('frontend/Default/ico/')); ?>/<?php echo e($hotgame->name.'.jpg'); ?>" />
                <div class="game-overlay">
                    <a href="<?php echo e(route('frontend.game.go', $hotgame->name)); ?>">Play For Real</a>
                    <a href="<?php echo e(route('frontend.game.go.prego', ['game'=>$hotgame->name, 'prego'=>'Pre_go'])); ?>">Play For Fun</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
    </div>
    <div style="text-align: center; margin: 20px;">
        <button id="btn_loadmore_hot" onclick="fn_loadmore('HOT')" class="btn btn-outline-secondary btn-lg">Load More</button>
    </div>
    <?php endif; ?>
    <?php if($currentSliderNum != "new"): ?>
    <div class="section-title">
        <h3>New Games</h3>
    </div>
    <div class="game-category-section">
        <div class="section-content" id="section-new">
        <?php if($newgames && count($newgames)): ?>
            <?php $__currentLoopData = $newgames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$newgame): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="game-item">
                <img data-original="<?php echo e(asset('frontend/Default/ico/')); ?>/<?php echo e($newgame->name.'.jpg'); ?>" />
                <div class="game-overlay">
                    <a href="<?php echo e(route('frontend.game.go', $newgame->name)); ?>">Play For Real</a>
                    <a href="<?php echo e(route('frontend.game.go.prego', ['game'=>$newgame->name, 'prego'=>'Pre_go'])); ?>">Play For Fun</a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        </div>
    </div>
    <div style="text-align: center; margin: 20px;">
        <button id="btn_loadmore_new" onclick="fn_loadmore('NEW')" class="btn btn-outline-secondary btn-lg">Load More</button>
    </div>
    <?php endif; ?>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page_bottom'); ?>
<script>
    var page_hot = 0;
    var page_new = 0;
    var page_game = 0;
    fn_loadmore=(type, category)=>{
        if(type == "HOT"){
            page_hot++;
        }
        else if(type == "NEW"){
            page_new++;
        }
        else if(type == "GAME"){
            page_game++;
        }
        $.ajax({
            url:"<?php echo e(route('frontend.loadmore.game')); ?>",
            type:"GET",
            data:{
                pagehot:page_hot,
                pagenew:page_new,
                pagegame:page_game,
                type:type,
                category:category
            },
            dataType:"JSON",
            success:(data)=>{
                var games = data.result;
                var section_game = "";

                if(games.length == 0){
                    switch (data.type) {
                        case "HOT":
                            $("#btn_loadmore_hot").hide();
                            break;
                        case "NEW":
                            $("#btn_loadmore_new").hide();
                            break;
                        case "GAME":
                            $("#btn_loadmore_game").hide();
                            break;
                        default:
                            break;
                    }
                    return;
                }

                for(var i=0;i<games.length;i++) {
                    section_game+=  '<div class="game-item">\
                                            <img src="/frontend/Default/ico/'+games[i].name+'.jpg" data-original="/frontend/Default/ico/'+games[i].name+'.jpg" data-image-blur-on-load-update-occured="true" style="filter: opacity(1);"/>\
                                            <div class="game-overlay">\
                                                <a href="/game/'+games[i].name+'">Play For Real</a>\
                                                <a href="/game/'+games[i].name+'/Pre_go">Play For Fun</a>\
                                            </div>\
                                        </div>';
                }
                switch (data.type) {
                    case "HOT":
                        $("#section-hot").append(section_game);
                        break;
                    case "NEW":
                        $("#section-new").append(section_game);
                        break;
                    case "GAME":
                        $("#section-game").append(section_game);
                        break;
                    default:
                        break;
                }

            },
            error:()=>{
                alert("error");
            }
        });
    }
    fn_playreal_auth=()=>{
        $("#signin-modal").modal({
            fadeDuration: 300
        });
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.Default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Task\Casino-Engine\resources\views/frontend/Default/games/list.blade.php ENDPATH**/ ?>