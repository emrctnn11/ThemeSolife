<?php $__env->startSection('title'); ?>Theme
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatable-extension.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Bayilerim</h3>
        <?php $__env->endSlot(); ?>
    <?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dt-ext">
                            <table class="display" id="responsive">
                                <thead>
                                <tr>
                                    <th>ADI SOYADI</th>
                                    <th>SPONSOR ID</th>
                                    <th>Il</th>
                                    <th>GSM</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd"><td colspan="4" class="dataTables_empty">
                                        <div class="card-body bg-danger">
                                            <p class="mb-0">Aradığınız kriterlere ait tablo bulunamamıştır.</p>
                                        </div></td></tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ADI SOYADI</th>
                                    <th>SPONSOR ID</th>
                                    <th>İL</th>
                                    <th>GSM</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/jszip.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/pdfmake.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/vfs_fonts.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.select.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.print.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/theme/v8/theme/resources/views/admin/forms/form-wizard.blade.php ENDPATH**/ ?>