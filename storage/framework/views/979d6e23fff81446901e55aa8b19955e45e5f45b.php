<?php $__env->startSection('page-title', trans('app.add_api')); ?>
<?php $__env->startSection('page-heading', trans('app.add_api')); ?>

<?php $__env->startSection('content'); ?>

<section class="content-header">
<?php echo $__env->make('backend.partials.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</section>

    <section class="content">
    <?php echo Form::open(['route' => 'backend.api.store', 'files' => true, 'id' => 'api-form']); ?>

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo app('translator')->get('app.add_api'); ?></h3>
        </div>

        <div class="box-body">
          <div class="row">

            <?php echo $__env->make('backend.api.partials.base', ['edit' => false, 'profile' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </div>
        </div>

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">
                <?php echo app('translator')->get('app.add_api'); ?>
            </button>
        </div>
      </div>
    <?php echo Form::close(); ?>

    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        $(function() {
            $('#generateKey').click(function(){
                $.ajax({
                    url: "<?php echo e(route('backend.api.generate')); ?>",
                    dataType: 'json',
                    success: function(data){
                        $('#keygen').val( data.key );
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cc.heidi.net.au/public_html/resources/views/backend/api/add.blade.php ENDPATH**/ ?>