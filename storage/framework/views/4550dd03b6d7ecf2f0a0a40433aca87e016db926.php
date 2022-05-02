<?php $__env->startSection('content'); ?>
<div class="container">
  <h2 style="font-weight: bold;">Add Product </h2>
  <div class="row">
    <div class="col-sm-6">
      <?php echo Form::open(['route'=>'addProduct','method'=>'post', 'enctype'=>'multipart/form-data']); ?>


      <div class="form-group">
        <?php echo Form::label('model', 'Model'); ?>

        <?php echo Form::text('model','',['class' => 'form-control', 'placeholder'=>'Model' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('model')); ?></span>
      </div>

      <div class="form-group">
        <?php echo Form::label('category', 'Category'); ?>

        <?php echo Form::select('category', ['s' => 'Smart Phone', 't' => 'Tablet', 'l' => 'Laptop/PC'],'s', ['class'
        =>
        'form-control']); ?>

      </div>
      <div class="form-group">
        <?php echo Form::label('brand', 'Brand'); ?>

        <?php echo Form::text('brand','',['class' => 'form-control' ,'placeholder'=>'Brand' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('brand')); ?></span>
      </div>
      <div class="form-group">
        <?php echo Form::label('screenSize', 'Screen Size'); ?>

        <?php echo Form::text('screenSize','',['class' => 'form-control' ,'placeholder'=>'ScreenSize' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('screenSize')); ?></span>
      </div>
      <div class="form-group">
        <?php echo Form::label('resolution', 'Resolution'); ?>

        <?php echo Form::text('resolution','',['class' => 'form-control' ,'placeholder'=>'Resolution' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('resolution')); ?></span>
      </div>
      <div class="form-group">
        <?php echo Form::label('cpu', 'CPU'); ?>

        <?php echo Form::text('cpu','',['class' => 'form-control' ,'placeholder'=>'CPU' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('cpu')); ?></span>
      </div>
      <div class="form-group">
        <?php echo Form::label('gpu', 'GPU'); ?>

        <?php echo Form::text('gpu','',['class' => 'form-control' ,'placeholder'=>'GPU' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('gpu')); ?></span>
      </div>
      <div class="form-group">
        <?php echo Form::label('os', 'Operting System'); ?>

        <?php echo Form::text('os','',['class' => 'form-control' ,'placeholder'=>'Operting System' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('os')); ?></span>
      </div>
      <div class="form-group">
        <?php echo Form::label('ram', 'RAM'); ?>

        <?php echo Form::text('ram','',['class' => 'form-control' ,'placeholder'=>'RAM' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('ram')); ?></span>
      </div>
    </div>

    <div class="col-sm-6">

      <div class="form-group">
        <?php echo Form::label('memory', 'Memory'); ?>

        <?php echo Form::text('memory','',['class' => 'form-control' ,'placeholder'=>'Memory' ]); ?>

      </div>
      <span class="text-danger"><?php echo e($errors->first('memory')); ?></span>
      <div class="form-group">
        <?php echo Form::label('camera', 'Camera'); ?>

        <?php echo Form::text('camera','',['class' => 'form-control' ,'placeholder'=>'Camera' ]); ?>

      </div>
      <div class="form-group">
        <?php echo Form::label('battery', 'Battery'); ?>

        <?php echo Form::text('battery','',['class' => 'form-control' ,'placeholder'=>'Battery' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('battery')); ?></span>
      </div>
      <div class="form-group">
           <?php echo Form::label('color', 'Color'); ?><br>
          <input type="checkbox" name="clr[]" value="red"/>Red 
          <input type="hidden" name="clr[]" value="red" />
          <input type="checkbox" name="clr[]" value="blue"/>Blue
          <input type="hidden" name="clr[]" value="blue" />
          <input type="checkbox" name="clr[]" value="black"/>Black
          <input type="hidden" name="clr[]" value="black" />
          <input type="checkbox" name="clr[]" value="white"/>White
          <input type="hidden" name="clr[]" value="white" />
          <input type="checkbox" name="clr[]" value="silver"/>Silver
          <input type="hidden" name="clr[]" value="silver" />
          <span class="text-danger"><?php echo e($errors->first('color')); ?></span> 
     
      </div>
      <div class="form-group">
        <?php echo Form::label('feactures', 'Other Feactures'); ?>

        <?php echo Form::textarea('feactures','',['class' => 'form-control' ,'rows' => 5,'placeholder'=>'Other Feactures' ]); ?>

      </div>
      <div class="form-group">
        <?php echo Form::label('price', 'Price'); ?>

        <?php echo Form::text('price','',['class' => 'form-control' ,'placeholder'=>'Price' ]); ?>

        <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
      </div>

      <div class="form-group">
        <?php echo e(Form::label("image", 'Product Image', ['class' => 'control-label'])); ?><br>
        <?php echo Form::file('image',['class'=>'form-group','onchange'=>'readURL(this);']);; ?>

        <img id="img" src=" " style="width:70px; height:70px; display:none;" />

      </div>
      <div class="form-group"><span class="text-danger"><?php echo e($errors->first('image')); ?></span></div>
      <br>
      <div class="form-group">
        <?php echo Form::submit('Add Product', ['class' => 'btn btn-lg btn-primary']); ?>

        <?php echo Form::close(); ?>

      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/products/addProduct.blade.php ENDPATH**/ ?>