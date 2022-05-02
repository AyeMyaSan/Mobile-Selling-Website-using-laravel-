<?php $__env->startSection('content'); ?>
<section aria-label="Main content" role="main" class="product-detail">
  <div class="cols">
    <div class="left-col">
      <div class="big">
        <div id="big-image">
          <div class="img">
            <a href=""><img src="<?php echo e(asset('images/'.$newsInfo->news_image)); ?>" class="card-img-top"  style="width:500px;"/></a> 
            <div class="detail-socials">
              <div class="social-sharing">
                <a target="_blank" class="share-facebook" title="Share"></a>
                <a target="_blank" class="share-twitter" title="Tweet"></a>
                <a target="_blank" class="share-pinterest" title="Pin it"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="right-col">
      <h1 itemprop="name"></h1>
      <div class="price-shipping">
        <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
          <?php echo e($newsInfo->news_title); ?>

        </div>
      </div>
      <div class="swatches">
        <div class="swatch clearfix" data-option-index="0">
          <p><?php echo e($newsInfo->news_detail); ?></p>
        </div>               
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/newsDetail.blade.php ENDPATH**/ ?>