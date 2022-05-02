<?php $__env->startSection('content'); ?>
<section class="mbr-section content4 cid-qvXDlTpHu4" id="content4-l" data-rv-view="670" style="background-color: #efefef;margin-bottom:20px;">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-6 col-md-12">
        <h2 class="align-center mbr-fonts-style display-2">
          NEWS</h2>                    
        </div>
      </div>
    </div>
  </section>
  <div class='container'>
    <?php $__currentLoopData = $newsInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="inner">
    <div class="header clearFix">
      <div class="logo"><img src="<?php echo e(asset('images/'.$value->news_image)); ?>" class="card-img-top"/></div>
      <div class="tagline">
        <h1 style="font-size:28px;"><a href="" style="text-decoration: none;"><?php echo e($value->news_title); ?></a></h1><br><br>
        <p><?php echo e($value->news_detail); ?></p><br>
        <?php echo Form::open(['route'=>'showNewsDetail', 'method'=>'post', 'enctype'=>'multipart/form-data']); ?>

        <?php echo Form::hidden('hiddenpostid',$value->id); ?>

        <?php echo Form::submit('View Detail', ['class' => 'btn btn-outline-primary']); ?>

        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/newsList.blade.php ENDPATH**/ ?>