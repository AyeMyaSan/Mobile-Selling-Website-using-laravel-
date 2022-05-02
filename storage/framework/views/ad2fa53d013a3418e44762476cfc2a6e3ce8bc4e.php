<?php $__env->startSection('content'); ?>
<div class="container">
  <span>
    <h2>My News</h2>
  </span>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <?php echo Form::submit('Last 7 Days Posts', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::submit('Last 30 Days Posts', ['class' => 'btn btn-primary']); ?>

        <?php echo Form::submit('View All Posts', ['class' => 'btn btn-primary']); ?>

      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive table--no-card m-b-40">
        <table class="table table-striped">
          <tbody>
            <tr>
              <td>Title</td>
              <td>Category</td>
              <td>Detail</td>
              <td>Image</td>
              <td >Edit</td>
              <td>Delete</td>
            </tr>
            <?php $__currentLoopData = $newsInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
              <td><?php echo e($value->news_title); ?></td>
              <td><?php echo e($value->news_category); ?></td>
              <td><?php echo e($value->news_detail); ?></td>
              <td><img src="<?php echo e(asset('images/'.$value->news_image)); ?>" width="50" height="50"/>
              </td>
              <td>
                <div class="form-group">
                  <?php echo Form::open(['route'=>['newsEditShow',$value->id],'method'=>'get']); ?>  
                  <?php echo Form::submit('Edit', ['class' => 'btn btn-sm btn-primary']); ?>

                  <?php echo Form::close(); ?>

                </div>
              </td>
              <td>
                <div class="form-group">
                  <?php echo Form::open(['route'=>'newsDelete','method'=>'post']); ?>

                  <?php echo Form::hidden('hiddenpostid', $value->id); ?>  
                  <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','onclick' => "return confirm('Are you sure to delete this post?')"]); ?>

                  <?php echo Form::close(); ?>

                </div>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/products/myNews.blade.php ENDPATH**/ ?>