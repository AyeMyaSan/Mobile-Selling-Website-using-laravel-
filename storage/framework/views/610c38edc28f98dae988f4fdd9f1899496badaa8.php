<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-md-8">
    <h2>My Products</h2>
    <?php if(count($productInfo) < 1): ?> <div class="text-center pt-4"><i class="fas fa-exclamation-triangle text-center"></i>
    </div>
    <h3 class="text-center pt-2 warning">No Posts have been found!</h3>
    <div class="text-center pt-4"><a href=<?php echo e(route('postAddShow')); ?> class="btn btn-primary">Add New Product</a></div>
    <?php endif; ?>
    <?php echo Form::submit('Last 7 Days Posts', ['class' => 'btn btn-md btn-primary']); ?>

    <?php echo Form::submit('Last 30 Days Posts', ['class' => 'btn btn-md btn-primary']); ?>

    <?php echo Form::submit('View All Posts', ['class' => 'btn btn-md btn-primary']); ?>

  </div>
  
  <div class="row">
    <?php $__currentLoopData = $productInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4 my-4">
      <div class="card">
        <img src="<?php echo e(asset('images/'.$value->Image)); ?>" class="card-img-top" alt="<?php echo e($value->Image); ?>">
        <div class="card-body">
          <h5 class="card-title">Model: <?php echo e($value->Model); ?></h5>
          <p class="card-text"> Brand: <?php echo e($value->Brand); ?> </p>
          <p class="card-text"> Category: <?php echo e(config('constants.category')[$value->Category]); ?> </p>
          <p class="card-text"> CPU: <?php echo e($value->CPU); ?> </p>
          <p class="card-text">  GPU: <?php echo e($value->GPU); ?> </p>
          <p class="card-text"> Operating System: <?php echo e($value->OS); ?> </p>
          <p class="card-text"> ScreenSize: <?php echo e($value->ScreenSize); ?> </p>
          
          <div class="card-footer">
              <?php echo Form::open(['route'=>['productEditShow',$value->id],'method'=>'get']); ?>  
            <?php echo csrf_field(); ?>
            <span class="text-left">
              <?php echo e($value->created_at->diff(Carbon::now())->days > 1 ? 'today' : $value->created_at->diffForHumans()); ?>

            </span>
            
            <span class="text-right">
              
              <?php echo Form::submit('Edit', ['class' => 'btn btn-sm btn-primary']); ?>

              <?php echo Form::close(); ?>

              <?php echo Form::open(['route'=>'productDelete', 'method'=>'post', 'class' => 'd-inline']); ?>

              <?php echo csrf_field(); ?>
              
              <?php echo Form::hidden('hiddenproductid', $value->id); ?>  
              <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','onclick' => "return confirm('Are you sure to delete this post?')"]); ?>

              
            </span>
            <?php echo Form::close(); ?>

          </span>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div> 
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/products/myProduct.blade.php ENDPATH**/ ?>