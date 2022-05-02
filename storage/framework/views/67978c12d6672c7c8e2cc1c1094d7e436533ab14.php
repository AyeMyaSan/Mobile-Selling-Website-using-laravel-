<?php $__env->startSection('content'); ?>    
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
        <div class="box">
            <div class="plan-selection" >
                <div class="plan-data">
            <h3 class="box-order">Ordered ID : 10211</h3>
            <h3 class="box-order">Order date : 5/6/2019</h3>
          <h3 class="box-order">Status : Pending</h3>
                </div>
              </div>
              <h3 class="box-title">Ordered Items</h3>
          <div class="plan-selection">
            <div class="plan-data">
             
              <label for="question1">Samsung Galaxy A50</label><br>
              <img src="<?php echo e(asset('images/s.jpg')); ?>" alt="order image" style="width:60px;height:80px;">
              <p class="plan-text">
                RAM : 8GB | Memory : 64GB | Color : White</p>
               
                <span class="plan-price"> Unit Price : 550000MMK</span>         
                <span class="plan-qty"> Quantity : 2</span> 
              
              </div>
            </div>
           
            <div class="plan-selection">
              <div class="plan-data">
               
                <label for="question1">Samsung Galaxy A30</label><br>
                <img src="<?php echo e(asset('images/s.jpg')); ?>" alt="order image" style="width:60px;height:80px;">
                <p class="plan-text">
                  RAM : 8GB | Memory : 64GB | Color : Black</p>
                 
                  <span class="plan-price"> Unit Price : 350000MMK</span>         
                  <span class="plan-qty"> Quantity : 1</span> 
                
                </div>
              </div>
              <div class="plan-selection">
                <div class="plan-data">
                 
                  <label for="question1">Samsung A7</label><br>
                  <img src="<?php echo e(asset('images/s.jpg')); ?>" alt="order image" style="width:60px;height:80px;">
                  <p class="plan-text">
                    RAM : 8GB | Memory : 64GB | Color : Black</p>
                   
                    <span class="plan-price"> Unit Price : 270000MMK</span>         
                    <span class="plan-qty"> Quantity : 1</span> 
                  
                  </div>
                </div>
              </div>  
      </div>
              
              <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                
                <div class="widget">
                  <h4 class="widget-title">Customer Details</h4>
                  <div class="summary-block">
                    <div class="summary-content">
                      <div class="summary-head"> <h5 class="summary-title">Name</h5></div>
                        <div class="summary-price">
                          <p class="summary-text">John</p>
                          
                        </div>
                        <div class="summary-head"> <h5 class="summary-title">Email</h5></div>
                        <div class="summary-price">
                          <p class="summary-text">example@gmail.com</p>
                          
                        </div>
                        
                      </div>
                    </div>
                    <div class="summary-block">
                        <div class="summary-content">
                          <div class="summary-head"> <h5 class="summary-title">Phone No.</h5></div>
                            <div class="summary-price">
                              <p class="summary-text">09791251493</p>
                              
                            </div>
                            <div class="summary-head"> <h5 class="summary-title">Address</h5></div>
                            <div class="summary-price">
                              <p class="summary-text">Daw Thein Tin Street</p>
                              
                            </div>
                            
                          </div>
                        </div>
                    <div class="summary-block">
                        <div class="summary-content">
                          <div class="summary-head"><h5 class="summary-title">Total Qty.</h5></div>
                          <div class="summary-price">
                            <p class="summary-text">4</p>
                            
                          </div>
                          <div class="summary-head"><h5 class="summary-title">Total Price</h5></div>
                          <div class="summary-price">
                            <p class="summary-text">1170000</p>
                            
                          </div>
                        </div>
                      </div>
                    <div class="summary-block">
                      <div class="summary-content">
                          <div class="summary-head"> <a href="#" class="btn btn-success">Confirm</a></div>
                          <div class="summary-price">
                            <p class="summary-text"><a href="#" class="btn btn-danger">Delete</a></p>
                            
                          </div>
                      
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/services/OrderDetail.blade.php ENDPATH**/ ?>