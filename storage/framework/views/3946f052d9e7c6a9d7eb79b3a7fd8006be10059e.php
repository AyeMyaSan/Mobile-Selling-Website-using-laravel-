  
  <?php $__env->startSection('content'); ?>
  <div id="app">
    <div class="newsform">
      <div class="container">
        <span>
          <h2 style="font-weight: bold;">Add a New News Post</h2>
        </span>
        <form action="<?php echo e(route('newsAdd')); ?>" method="POST" enctype="multipart/form-data">
          
          <?php echo csrf_field(); ?>
          <div class="row">
            
            <div class="col-md-8">
              <div class="form-group">
                <?php echo Form::label('news_title', 'Title:'); ?>

                <?php echo Form::text('news_title','',['class' => 'form-control' ,'placeholder'=>'Title' ]); ?>

                <span class="text-danger"><?php echo e($errors->first('news_title')); ?></span>
              </div>
              <div class="form-group">
                <?php echo Form::label('news_category','News Category:'); ?>

                <?php echo Form::select('news_category',['Tablet' => 'Tablet', 'smartphone' => 'Smart Phone', 'labtop'
                => 'Labtop/PC'], null, ["class" => "form-control" ]); ?>

                <span class="text-danger"><?php echo e($errors->first('news_category')); ?></span>
              </div>
              <div class="form-group">
                <?php echo Form::label('news_detail', 'Detail:'); ?>

                <?php echo Form::textarea('news_detail','',['class' => 'form-control' ,'rows' => 3,'placeholder'=>'Detail' ]); ?>

                <span class="text-danger"><?php echo e($errors->first('news_detail')); ?></span>
              </div>
              
              <div class="form-group">
                <?php echo e(Form::label("news_image", 'Image', ['class' => 'control-label'])); ?><br>
                <?php echo Form::file('news_image',['class'=>'form-group','onchange'=>'readURL(this);']);; ?>

                <img id="img" src=" "  style="width:100px; height:100px; display:none;"/>
                
              </div>
              <div class="form-group"><span class="text-danger"><?php echo e($errors->first('news_image')); ?></span></div>
            </div>
          </div>
          
          <div class="form-group">
            <?php echo Form::submit('Add', ['class' => 'btn btn-primary']); ?>

          </div>
        </div>
        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/products/addNews.blade.php ENDPATH**/ ?>