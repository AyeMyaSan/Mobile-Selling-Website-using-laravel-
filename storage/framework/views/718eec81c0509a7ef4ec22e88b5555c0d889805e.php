<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<div class="container">
  <?php echo Form::open(['route'=>'showUserForm', 'method'=>'post', 'enctype' => 'multipart/form-data']); ?>

  <table id="cart" class="table table-hover table-condensed table-responsive product">
    <thead>
      <tr>
        <th style="width:40%">Product</th>
        <th style="width:10%">Color</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
      
      <?php 
      $total = 0;
      $total_cost = 0;
      ?>
      
      <?php if(session('cart')): ?>
      <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
      
      <?php echo csrf_field(); ?>
      
      <?php
      $price = (int)$details['price'];
      ?>
      
      <?php 
      $total = $price * $details['quantity'];
      $total_cost += $total;
      ?>
      
      <tr class="product">
        <td data-th="Product">
          <div class="row">
            <div class="col-sm-3 hidden-xs"><img src="<?php echo e(asset('images/'.$details['image'])); ?>" width="100" height="100"
              class="img-responsive" /></div>
              <div class="col-sm-9">
                <h4 class="nomargin"><?php echo e($details['model']); ?></h4>
              </div>
            </div>
          </td>
          <td data-th="Color"><?php echo e($details['color']); ?></td>
          <td data-th="Price" class="product-price"><?php echo e($price); ?>MMK</td>
          <td data-th="Quantity" class="product-quantity">
            <?php echo Form::number("product[{$key}][quantity]",$details['quantity'],['class' => 'form-control quantity','min'=>'1']); ?>

          </td>
          <td data-th="Subtotal" class="product-line-price text-center"><?php echo e($total); ?>MMK</td>
          <td class="actions" data-th="">
            <button class="btn btn-danger btn-sm remove-from-cart" name="btn_edit_post" value="<?php echo e($key); ?>" ><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
        <?php echo Form::hidden("product[{$key}][id]",$details['id'],['class' => 'form-control quantity','min'=>'1']); ?>

        <?php echo Form::hidden("product[{$key}][color]",$details['color'],['class' => 'form-control quantity']); ?>

      </tbody>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tfoot>
        <tr>
          <td><a href="<?php echo e(url('/')); ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
          <td colspan="3" class="hidden-xs"></td>
          <td class="hidden-xs text-center"><strong>Total $<?php echo e($total_cost); ?></strong></td>
        </tr>
      </tfoot>
      <?php endif; ?>
    </table>
    
    <div style="margin-left:40%;">
      <?php echo Form::submit('Update', ['class' => 'btn btn-lg btn-primary', 'name' => "btn_edit_post" ]); ?>

    </div>
    <?php echo Form::close(); ?>

  </div>
  <script src="<?php echo e(asset('js/Qty.js')); ?>"></script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/ProductCart.blade.php ENDPATH**/ ?>