<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-md-12 ">
    <div class="row" style="margin:0%">
      <div class="col-md-7 col-sm-6">
        <div class="card" style="margin-bottom:5px;">
          <div class="card-header">
            <h1 style="font-size:18px;font-weight:bold;">Billing Address</h1>
          </div>
          <div class="card-body">
            <div class="col-md-12">
              <div class="form-group">
                
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
              
              </div>
              <div class="form-group">
                
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" placeholder="john@example.com">
              </div>
              <div class="form-group">
                
                <label for="ph"><i class="fa fa-address-card-o"></i> Phone No.</label>
                <input type="text" id="adr" name="address" placeholder="09.........">
    
              </div>
              <div class="form-group">
                  <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                  <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                  
              </div>
            </div>
            <div class="crad-footer" style="margin-left:35%">
                <?php echo Form::open(['route'=>'showUserForm', 'method'=>'post', 'enctype' => 'multipart/form-data']); ?>

              <?php echo Form::submit('Continute Check Out', ['class' => 'btn btn-primary']); ?>

              <?php echo Form::close(); ?>

            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <div class="card" style="margin-bottom:5px;">
          <div class="card-header">
            <h1 style="font-size:18px;font-weight:bold;">Your Items</h1>
          </div>
          <div class="card-body">
            <div class="col-md-12">
              
              <div class="table-responsive table--no-card m-b-40">
                <table class="table">
                  <tbody>
                    <tr>                   
                      <td>Product</td>
                      <td>Color</td>
                      <td>Quantity</td>
                      <td>Price</td>
                    </tr>
                    <?php 
                    $subtotal = 0;
                    $total = 0;
                    ?>
                    <?php $__currentLoopData = session('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php 
                    $subtotal =(int) $details['price'] * $details['quantity'];
                    $total += $subtotal;
                    ?>
                    <tr>                   
                      <td><?php echo e($details['model']); ?><br>
                        <img src="<?php echo e(asset('images/'.$details['image'])); ?>" alt="order image" style="width:60px;height:70px;">
                      </td>
                      <td><?php echo e($details['color']); ?></td>
                      <td><?php echo e($details['quantity']); ?></td>
                      <td><?php echo e($subtotal); ?>MMK</td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan="3">Total Price</td>
                      <td><?php echo e($total); ?>MMK</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/UserForm.blade.php ENDPATH**/ ?>