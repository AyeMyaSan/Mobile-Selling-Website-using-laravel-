@extends('home')
@section('content')
<div id="app">
  <div class="newsform">
    <div class="container">
      <span>
        <h2 style="font-weight: bold;">Add a New News Post</h2>
      </span>
      <form action="{{ route('newsUpdate') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        
        <div class="col-md-12">

          <div class="form-group">
            {!!Form::hidden('hiddenpostid', !empty($newsInfo->id) ? $newsInfo->id : '') !!}
            {!!Form::label('news_title','News title:')!!}
            {!! Form::text('news_title', !empty($newsInfo->news_title) ? $newsInfo->news_title : '', ['class' => 'form-control', 'placeholder'=>'news title',]) !!}
            <span class="text-danger">{{$errors->first('new_title')}}</span>
          </div>
          
          <div class="form-group">
            {!!Form::hidden('hiddenpostid', !empty($newsInfo->id) ? $newsInfo->id : '') !!}
            {!!Form::label('news_category','News Category:')!!}
            {!!Form::select('news_category',['Tablet' => 'Tablet', 'smartphone' => 'Smart Phone', 'labtop'
            => 'Labtop/PC'], null, ["class" => "form-control" ])!!}
            <span class="text-danger">{{$errors->first('news_category')}}</span>
          </div>
          
          <div class="form-group">
            {!!Form::hidden('hiddenpostid', !empty($newsInfo->id) ? $newsInfo->id : '') !!}
            {!!Form::label('news_detail','News Detail:')!!}
            {!! Form::textarea('news_detail', !empty($newsInfo->news_detail)? $newsInfo->news_detail :'', ['class' => 'form-control','rows' => 4 , 'placeholder'=>'news detail']) !!}
            <span class="text-danger">{{$errors->first('news_detail')}}</span>
          </div>
          
          <div class="form-group">
            {{ Form::label("news_image", 'Image', ['class' => 'control-label']) }}<br>
            {!! Form::file('news_image',['class'=>'form-group','onchange'=>'readURL(this);']); !!}
            <img id="img" src="{{asset('images/'.$newsInfo->news_image)}}"  style="width:100px; height:100px;"/>
          </div>

          <div class="form-group">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>
      </div>
      {!!Form::close()!!}
    </div>
  </div>
</div>
@endsection

