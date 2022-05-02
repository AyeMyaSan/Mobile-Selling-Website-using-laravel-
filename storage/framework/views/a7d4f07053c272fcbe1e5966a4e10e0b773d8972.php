<?php $__env->startSection('content'); ?>
        <div class="app">
          <div class="newsform">
            <div class="container">
              <span>
                <h2 style="font-weight: bold;">Edit Product</h2>
              </span>
              <div class="row">
                <div class="col-sm-6">
                  
                  <?php echo Form::open(['route'=>'productUpdate', 'method'=>'post', 'enctype' => 'multipart/form-data']); ?>

                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                    <?php echo Form::hidden('hiddenproductid', $productInfo->id); ?>

                    <?php echo Form::label('model', 'Model'); ?>

                    <?php echo Form::text('model',!empty($productInfo->Model) ? $productInfo->Model : '',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('model')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('category', 'Category'); ?>

                    <?php echo Form::select('category',['s' => 'Smart Phone', 't' => 'Tablet', 'l' => 'Laptop/PC'],!empty($productInfo->Category) ? $productInfo->Category:'', ['class'
                    =>'form-control']); ?>

                  </div>
                  <div class="form-group">
                    <?php echo Form::label('brand', 'Brand'); ?>

                    <?php echo Form::text('brand',!empty($productInfo->Brand) ? $productInfo->Brand:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('brand')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('screenSize', 'Screen Size'); ?>

                    <?php echo Form::text('screenSize',!empty($productInfo->ScreenSize) ? $productInfo->ScreenSize:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('screenSize')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('resolution', 'Resolution'); ?>

                    <?php echo Form::text('resolution',!empty($productInfo->Resolution) ? $productInfo->Resolution:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('resolution')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('cpu', 'CPU'); ?>

                    <?php echo Form::text('cpu',!empty($productInfo->CPU) ? $productInfo->CPU:'',['class' => 'form-control' ]); ?>

                    <span class="text-danger"><?php echo e($errors->first('cpu')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('gpu', 'GPU'); ?>

                    <?php echo Form::text('gpu',!empty($productInfo->GPU) ? $productInfo->GPU:'',['class' => 'form-control' ]); ?>

                    <span class="text-danger"><?php echo e($errors->first('gpu')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('os', 'Operting System'); ?>

                    <?php echo Form::text('os',!empty($productInfo->OS) ? $productInfo->OS:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('os')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('ram', 'RAM'); ?>

                    <?php echo Form::text('ram',!empty($productInfo->RAM) ? $productInfo->RAM:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('ram')); ?></span>
                  </div>
                </div>
                
                <div class="col-sm-6">
                  
                  <div class="form-group">
                    <?php echo Form::label('memory', 'Memory'); ?>

                    <?php echo Form::text('memory',!empty($productInfo->Memory) ? $productInfo->Memory:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('memory')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('camera', 'Camera'); ?>

                    <?php echo Form::text('camera',!empty($productInfo->Camera) ? $productInfo->Camera:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('camera')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo Form::label('battery', 'Battery'); ?>

                    <?php echo Form::text('battery',!empty($productInfo->Battery) ? $productInfo->Battery:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('battery')); ?></span>
                  </div>
                  
                  <div class="form-group">
                      <?php echo Form::label('color', 'Color'); ?><br>
                     <input type="checkbox" name="clr[]" value="<?php echo e($productInfo->Color); ?>"/>Red 
                     <input type="checkbox" name="clr[]" value="<?php echo e($productInfo->Color); ?>"/>Blue
                     <input type="checkbox" name="clr[]" value="<?php echo e($productInfo->Color); ?>"/>Black
                     <input type="checkbox" name="clr[]" value="<?php echo e($productInfo->Color); ?>"/>White
                     <input type="checkbox" name="clr[]" value="<?php echo e($productInfo->Color); ?>"/>Silver
                 </div>
                  <div class="form-group">
                    <?php echo Form::label('feactures', 'Other Feactures'); ?>

                    <?php echo Form::textarea('feactures',!empty($productInfo->Other_Feactures) ? $productInfo->Other_Feactures:'',['class' => 'form-control' ,'rows' => 5 ]); ?>

                  </div>
                  <div class="form-group">
                    <?php echo Form::label('price', 'Price'); ?>                    
                    <?php echo Form::text('price',!empty($productInfo->Price) ? $productInfo->Price:'',['class' => 'form-control']); ?>

                    <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                  </div>
                  <div class="form-group">
                    <?php echo e(Form::label("image", 'image', ['class' => 'control-label'])); ?>

                    <i class="fas fa-file-image fa-lg"></i><br>
                    <?php echo Form::file('image',['class'=>'form-group','onchange'=>'readURL(this);']);; ?>

                    <img id="img" src="<?php echo e(asset('images/'.$productInfo->Image)); ?>"  style="width:100px; height:100px;"/>
                  </div>
                  <div class="form-group"><span class="text-danger"><?php echo e($errors->first('image')); ?></span></div>
                  <br>
                  <div class="form-group">
                    <?php echo Form::submit('Update', ['class' => 'btn btn-lg btn-primary']); ?>

                    <?php echo Form::close(); ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php $__env->stopSection(); ?> 
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/products/productEdit.blade.php ENDPATH**/ ?>