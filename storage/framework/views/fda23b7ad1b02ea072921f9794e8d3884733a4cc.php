<?php $__env->startSection('content'); ?>
<section class="p-t-20">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title-5 m-b-35">Order Lists</h3>
        <div class="table-data__tool">
          <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
              <select class="js-select2" name="property">
                <option selected="selected">All Properties</option>
                <option value="">Smart Phone</option>
                <option value="">Tablet</option>
                <option value="">Laptop/pc</option>
              </select>
            </div>
          </div>
          <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
              <thead>
                <tr>
                  
                  <th>user_name</th>
                  <th>phoneNo.</th>
                  <th>product_id</th>
                  <th>product name</th>
                  <th>quantity</th>
                  <th>total price</th>
                  <th>date</th>
                  <th>status</th>
                  <th colspan="2"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="tr-shadow">
                  
                  <td>Lori Lynch</td>
                  <td>09791251493</td>
                  <td>
                    <span class="block-email">3050</span><br>
                    <span class="block-email">3060</span>
                  </td>
                  <td class="desc">
                    <span>Samsung S8 Black<span><br>
                      <span>Samsung S8 White<span>
                      </td>
                      <td>
                        <span>1</span><br>
                        <span>1</span>
                      </td>
                      <td>$679.00</td>
                      <td>2018-09-27 02:12</td>
                      <td>
                        <span class="status--process">Processed</span>
                      </td>
                      
                      <td>
                        
                            <a href="<?php echo e(route('showOrderDetail')); ?>" class="btn btn-primary btn-sm">ViewDetail</a>
                           
                      </td>
                      <td>
                          
                              <a href="<?php echo e(route('showOrderDetail')); ?>" class="btn btn-danger btn-sm">Remove</a>
                             
                          
                        </td>
                    </tr>
                    <tr class="tr-shadow">
                  
                        <td>Lori Lynch</td>
                        <td>09791251493</td>
                        <td>
                          <span class="block-email">3050</span><br>
                          <span class="block-email">3060</span>
                        </td>
                        <td class="desc">
                          <span>Samsung S8 Black<span><br>
                            <span>Samsung S8 White<span>
                            </td>
                            <td>
                              <span>1</span><br>
                              <span>1</span>
                            </td>
                            <td>$679.00</td>
                            <td>2018-09-27 02:12</td>
                            <td>
                              <span class="status--process">Processed</span>
                            </td>
                           
                            <td>
                              
                                  <a href="<?php echo e(route('showOrderDetail')); ?>" class="btn btn-primary btn-sm">ViewDetail</a>
                                 
                            </td>
                            <td>
                                
                                    <a href="<?php echo e(route('showOrderDetail')); ?>" class="btn btn-danger btn-sm">Remove</a>
                                   
                                
                              </td>
                          </tr>
                    <tr class="spacer"></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/services/Order.blade.php ENDPATH**/ ?>