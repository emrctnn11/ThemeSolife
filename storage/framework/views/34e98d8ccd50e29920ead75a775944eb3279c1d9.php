<?php $__env->startSection('title'); ?>Validation Forms
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Yeni Bayi Kayıt</h3>
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
                        <form>
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label class="form-label" for="validationDefault01">Ad</label>
                                    <input class="form-control" id="validationDefault01" type="text" placeholder="Ad" required="" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="validationDefault02">Soyadı</label>
                                    <input class="form-control" id="validationDefault02" type="text" placeholder="Soyad" required="" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="validationDefault02">Şifre</label>
                                    <input class="form-control" id="validationDefault02" type="password" placeholder="şifre" required="" />
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label" for="validationDefaultUsername">E-posta</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                        <input class="form-control" id="validationDefaultUsername" type="email" placeholder="Username" aria-describedby="inputGroupPrepend2" required="" />
                                    </div>
                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationDefault03">İl</label>
                                    <input class="form-control" id="validationDefault03" type="text" placeholder="Şehir" required="" />
                                </div>
                                <div class="col-md-3">
                                    <label class="form-label" for="validationDefault04">İlçe</label>
                                    <select class="form-select" id="validationDefault04" required="">
                                        <option selected="" disabled="" value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label class="form-label" for="validationDefault05">Adres</label>
                                    <input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-check">
                                    <div class="checkbox p-0">
                                        <input class="form-check-input" id="invalidCheck2" type="checkbox" required="" />
                                        <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/theme/v8/theme/resources/views/admin/forms/form-validation.blade.php ENDPATH**/ ?>