<?php $__env->startSection('content'); ?>
<section aria-label="Main content" role="main" class="product-detail">
    <?php echo Form::open(['route'=>'showProductCart', 'method'=>'post', 'enctype' => 'multipart/form-data']); ?>


    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="big">
              <span id="big-image" class="img" quickbeam="image" src="<?php echo e(asset('images/'.$value->Image)); ?>" ></span>
              
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                  <a target="_blank" class="share-facebook" title="Share"></a>
                  <a target="_blank" class="share-twitter" title="Tweet"></a>
                  <a target="_blank" class="share-pinterest" title="Pin it"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name">Apple iPhone X</h1>
            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
              <meta itemprop="priceCurrency" content="USD">
              <link itemprop="availability" href="https://schema.org/InStock">
              <div class="price-shipping">
                <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
                  $800.00
                </div>
                <a>Free shipping</a>
              </div>
              <div class="swatches">
                <div class="swatch clearfix" data-option-index="0">
                  <div class="header">Color</div>
                  <div data-value="Blue" class="swatch-element color blue available">
                    <div class="tooltip">Blue</div>
                    <input quickbeam="color" id="swatch-1-blue" type="radio" name="option-1" value="Blue" checked="">
                    <label for="swatch-1-blue" style="border-color: blue;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                      <span style="background-color: blue;"></span>
                    </label>
                  </div>
                  <div data-value="Red" class="swatch-element color red available">
                    <div class="tooltip">Red</div>
                    <input quickbeam="color" id="swatch-1-red" type="radio" name="option-1" value="Red">
                    <label for="swatch-1-red" style="border-color: red;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                      <span style="background-color: red;"></span>
                    </label>
                  </div>
                  <div data-value="Yellow" class="swatch-element color yellow available">
                    <div class="tooltip">Yellow</div>
                    <input quickbeam="color" id="swatch-1-yellow" type="radio" name="option-1" value="Yellow">
                    <label for="swatch-1-yellow" style="border-color: yellow;">
                      <img class="crossed-out" src="//cdn.shopify.com/s/files/1/1047/6452/t/1/assets/soldout.png?10994296540668815886">
                      <span style="background-color: yellow;"></span>
                    </label>
                  </div>
                </div>
                <div class="guide">
                  <a>other...</a>
                </div>
              </div>
                <form id="AddToCartForm">
                  <div class="btn-and-quantity-wrap">
                    <div class="btn-and-quantity">
                      <div class="spinner">
                        <span class="btn minus" data-id=""></span>
                        <input type="text" id="" name="quantity" value="1" class="quantity-selector">
                        <input type="hidden" id="" name="product_id" value="">
                        <span class="q">Qty.</span>
                        <span class="btn plus" data-id=""></span>
                      </div>
                      <div id="AddToCart" quickbeam="add-to-cart">
                        <span id="AddToCartText">Add to Cart</span>
                      </div>
                    </div>
                  </div>
                </form>
                <div class="tabs">
                  <div class="left-col">
                    <p> Brand: 2018</p>
                    <p> Resolution:1024px</p>
                    <p>Screen Size: 16 in</p>
                    <p> CPU: CPU</p>
                    <p> Price: 300,000</p>
                    <p> Brand: 2018</p>
                    <p> Resolution:1024px</p>
                    <p> CPU: CPU</p>
                  </div>
                  <div class="left-col">
                    <p> Brand: 2018</p>
                    <p> Resolution:1024px</p>
                    <p>Screen Size: 16 in</p>
                    <p> CPU: CPU</p>
                    <p> Price: 300,000</p>
                    <p> Brand: 2018</p>
                    <p> Resolution:1024px</p>
                    <p> CPU: CPU</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project(E-Market)\resources\views/productCart.blade.php ENDPATH**/ ?>