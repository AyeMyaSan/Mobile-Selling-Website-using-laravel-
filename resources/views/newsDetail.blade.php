@extends('layouts.app')
@section('content')
<section aria-label="Main content" role="main" class="product-detail">
  <div class="cols">
    <div class="left-col">
      <div class="big">
        <div id="big-image">
          <div class="img">
            <a href=""><img src="{{asset('images/'.$newsInfo->news_image)}}" class="card-img-top"  style="width:500px;"/></a> 
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
          {{$newsInfo->news_title}}
        </div>
      </div>
      <div class="swatches">
        <div class="swatch clearfix" data-option-index="0">
          <p>{{$newsInfo->news_detail}}</p>
        </div>               
      </div>
    </div>
  </div>
</section>
@endsection