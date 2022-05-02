<?php $__env->startSection('content'); ?>
<section class="mbr-section content4 cid-qvXDlTpHu4" id="content4-l" data-rv-view="670" style="background-color: #efefef;margin-bottom:10px;">
    <div class="container">
       <div class="media-container-row">
        <h2 class="align-center mbr-fonts-style display-2">
            SmartPhone</h2>                    
          </div>
       </div>
     </section>
<div class="container justify-content-center">
  <div class="col-md-12">
    <div class="row" style="display:flex; align:center;">
      <?php if(count($productInfo) < 1): ?> <div class="text-center pt-4"><i class="fas fa-exclamation-triangle text-center"></i>
      </div>
      <h3 class="text-center pt-2 warning">No Posts have been found!</h3>
      <div class="text-center pt-4"><a href=<?php echo e(route('showProductAdd')); ?> class="btn btn-primary">Add New Post</a></div>
      <?php endif; ?>
      <?php $__currentLoopData = $productInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-4 col-sm-6">
        <div class="card" style="margin-bottom:5px;">
          <span class="product-new-label"
          style="color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0">Sale</span>
          <a href="<?php echo e(route('showProductDetail',$value->id)); ?>"><img src="<?php echo e(asset('images/'.$value->Image)); ?>" class="card-img-top" alt="<?php echo e($value->Image); ?>"
            style="height:280px;" /></a>
            <div class="card-body">
              <h4 class="card-title mbr-fonts-style display-5">
                <a href="<?php echo e(route('showProductDetail',$value->id)); ?>">
                  <p class="card-text"><?php echo e($value->Model); ?>&nbsp;(<?php echo e($value->RAM); ?>/<?php echo e($value->Memory); ?>)</p>
                </a>
              </h4>
              <p class="card-text"><?php echo e($value->Brand); ?><br><?php echo e($value->Color); ?></p>
              <p class="card-text" style="color:#F5762A"> <?php echo e($value->Price); ?> </p>
              <?php echo Form::open(['route'=>['showProductDetail',$value->id],'method'=>'get']); ?>

              <?php echo Form::submit('View Detail', ['class' => 'btn btn-lg btn-primary']); ?>

              <?php echo Form::close(); ?>

            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/smartPhone.blade.php ENDPATH**/ ?>