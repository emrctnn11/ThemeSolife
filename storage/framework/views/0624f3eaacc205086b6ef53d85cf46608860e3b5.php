<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <?php echo e($breadcrumb_title ?? ''); ?>

          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>">Ana Sayfa</a></li>
              <?php echo e($slot ?? ''); ?>

          </ol>
        </div>
      </div>
    </div>
</div>
<?php /**PATH /home/vagrant/code/theme/v8/theme/resources/views/components/breadcrumb.blade.php ENDPATH**/ ?>