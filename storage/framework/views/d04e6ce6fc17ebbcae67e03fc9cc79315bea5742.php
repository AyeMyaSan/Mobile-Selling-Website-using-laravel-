<?php $__env->startSection('content'); ?>
<div id="app">
  <div class="newsform">
    <div class="container">
      <span>
        <h2 style="font-weight: bold;">Add a New News Post</h2>
      </span>
      <form action="<?php echo e(route('newsUpdate')); ?>" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
      <div class="row">
        
        <div class="col-md-12">

          <div class="form-group">
            <?php echo Form::hidden('hiddenpostid', !empty($newsInfo->id) ? $newsInfo->id : ''); ?>

            <?php echo Form::label('news_title','News title:'); ?>

            <?php echo Form::text('news_title', !empty($newsInfo->news_title) ? $newsInfo->news_title : '', ['class' => 'form-control', 'placeholder'=>'news title',]); ?>

            <span class="text-danger"><?php echo e($errors->first('new_title')); ?></span>
          </div>
          
          <div class="form-group">
            <?php echo Form::hidden('hiddenpostid', !empty($newsInfo->id) ? $newsInfo->id : ''); ?>

            <?php echo Form::label('news_category','News Category:'); ?>

            <?php echo Form::select('news_category',['Tablet' => 'Tablet', 'smartphone' => 'Smart Phone', 'labtop'
            => 'Labtop/PC'], null, ["class" => "form-control" ]); ?>

            <span class="text-danger"><?php echo e($errors->first('news_category')); ?></span>
          </div>
          
          <div class="form-group">
            <?php echo Form::hidden('hiddenpostid', !empty($newsInfo->id) ? $newsInfo->id : ''); ?>

            <?php echo Form::label('news_detail','News Detail:'); ?>

            <?php echo Form::textarea('news_detail', !empty($newsInfo->news_detail)? $newsInfo->news_detail :'', ['class' => 'form-control','rows' => 4 , 'placeholder'=>'news detail']); ?>

            <span class="text-danger"><?php echo e($errors->first('news_detail')); ?></span>
          </div>
          
          <div class="form-group">
            <?php echo e(Form::label("news_image", 'Image', ['class' => 'control-label'])); ?><br>
            <?php echo Form::file('news_image',['class'=>'form-group','onchange'=>'readURL(this);']);; ?>

            <img id="img" src="<?php echo e(asset('images/'.$newsInfo->news_image)); ?>"  style="width:100px; height:100px;"/>
          </div>

          <div class="form-group">
            <?php echo Form::submit('Update', ['class' => 'btn btn-primary']); ?>

          </div>
        </div>
      </div>
      <?php echo Form::close(); ?>

    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/products/newsEdit.blade.php ENDPATH**/ ?>