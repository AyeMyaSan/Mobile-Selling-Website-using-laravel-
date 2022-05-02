@extends('layouts.app')
@section('content')
<section class="mbr-section content4 cid-qvXDlTpHu4" id="content4-l" data-rv-view="670" style="background-color: #efefef;margin-bottom:20px;">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-6 col-md-12">
        <h2 class="align-center mbr-fonts-style display-2">
          NEWS</h2>                    
        </div>
      </div>
    </div>
  </section>
  <div class='container'>
    @foreach($newsInfo as $key=>$value)
  <div class="inner">
    <div class="header clearFix">
      <div class="logo"><img src="{{asset('images/'.$value->news_image)}}" class="card-img-top"/></div>
      <div class="tagline">
        <h1 style="font-size:28px;"><a href="" style="text-decoration: none;">{{$value->news_title}}</a></h1><br><br>
        <p>{{$value->news_detail}}</p><br>
        {!!Form::open(['route'=>'showNewsDetail', 'method'=>'post', 'enctype'=>'multipart/form-data'])!!}
        {!!Form::hidden('hiddenpostid',$value->id)!!}
        {!! Form::submit('View Detail', ['class' => 'btn btn-outline-primary']) !!}
        {!!Form::close()!!}
      </div>
    </div>
  </div>
 @endforeach  
</div>
@endsection