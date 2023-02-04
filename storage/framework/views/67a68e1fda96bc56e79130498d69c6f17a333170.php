<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Basic_Elements'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Biota <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Edit Biota <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<!-- Start row -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Sizing</h4>
                <p class="card-title-desc">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('biota.update', $biota->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label class="form-label" for="biota">Biota</label>
                        <input class="form-control" value="<?php echo e($biota->nama_biota); ?>" type="text" id="nama_biota" name="nama_biota" placeholder="Nama Biota">
                    </div>
                    
                    <label class="form-label" for="biota">Jenis Biota</label>
                    <select class="form-control mb-4" data-trigger name="id_jenis_biota"
                        id="choices-single-default"
                        placeholder="Cari jenis biota">
                        <option value="">Pilih jenis biota</option>
                         <?php $__currentLoopData = $jenisBiotas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenisBiota): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                   
                        <option value="<?php echo e($biota->jenisBiota['jenis_biota']); ?>"><?php echo e($jenisBiota->jenis_biota); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="mb-4">
                        <label class="form-label" for="biota">Deskripsi</label>
                        <input class="form-control" value="<?php echo e($biota->deskripsi); ?>" type="text" id="deskripsi" name="deskripsi" placeholder="Deskripsi">
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Gambar</h4>
                            <p class="card-title-desc">Silahkan upload file gambar dari biota disini.
                            </p>
                        </div>
                        <div class="card-body">

                            <div>
                                    <div class="fallback">
                                        <input name="image" type="file">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="mt-1 btn btn-primary waves-effect waves-light">Update Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\dashboardusea3\resources\views/biota/edit.blade.php ENDPATH**/ ?>