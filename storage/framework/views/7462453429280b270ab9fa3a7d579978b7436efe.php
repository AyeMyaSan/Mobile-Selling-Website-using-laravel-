<?php $__env->startSection('content'); ?>

<div id="app">
  <div class="newsform">
    <div class="container">
      <span>
        <h2>Customers's Record</h2>
      </span>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <?php echo Form::submit('Last 7 days Registrations', ['class' => 'btn btn-primary']); ?>

            <?php echo Form::submit('Last 30 days Registrations', ['class' => 'btn btn-primary']); ?>

            <?php echo Form::submit('View All Registrations', ['class' => 'btn btn-primary']); ?>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <div class="table-responsive table--no-card m-b-40">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">No.</th>                    
                    <td>Name</td>
                    <td>Email</td>
                    
                    <td colspan="2">Action</td>
                  </tr>
                  <?php $__currentLoopData = $userInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo e($value->name); ?></td>
                    <td><?php echo e($value->email); ?></td>                  
                    <td>
                      <div class="form-group">
                        <?php echo Form::submit('Reply', ['class' => 'btn btn-sm btn-primary']); ?>

                        
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                          <?php echo Form::open(['route'=>'customerDelete','method'=>'post']); ?>

                          <?php echo Form::hidden('hiddenpostid', $value->id); ?>  
                          <?php echo Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']); ?>

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
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/services/customer.blade.php ENDPATH**/ ?>