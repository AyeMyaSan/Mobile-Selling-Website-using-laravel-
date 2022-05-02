  @extends('home')
  @section('content')
  <div id="app">
    <div class="newsform">
      <div class="container">
        <span>
          <h2 style="font-weight: bold;">Add a New News Post</h2>
        </span>
        <form action="{{ route('newsAdd') }}" method="POST" enctype="multipart/form-data">
          
          @csrf
          <div class="row">
            
            <div class="col-md-8">
              <div class="form-group">
                {!! Form::label('news_title', 'Title:')!!}
                {!! Form::text('news_title','',['class' => 'form-control' ,'placeholder'=>'Title' ]) !!}
                <span class="text-danger">{{$errors->first('news_title')}}</span>
              </div>
              <div class="form-group">
                {!!Form::label('news_category','News Category:')!!}
                {!!Form::select('news_category',['Tablet' => 'Tablet', 'smartphone' => 'Smart Phone', 'labtop'
                => 'Labtop/PC'], null, ["class" => "form-control" ])!!}
                <span class="text-danger">{{$errors->first('news_category')}}</span>
              </div>
              <div class="form-group">
                {!! Form::label('news_detail', 'Detail:')!!}
                {!! Form::textarea('news_detail','',['class' => 'form-control' ,'rows' => 3,'placeholder'=>'Detail' ]) !!}
                <span class="text-danger">{{$errors->first('news_detail')}}</span>
              </div>
              
              <div class="form-group">
                {{ Form::label("news_image", 'Image', ['class' => 'control-label']) }}<br>
                {!! Form::file('news_image',['class'=>'form-group','onchange'=>'readURL(this);']); !!}
                <img id="img" src=" "  style="width:100px; height:100px; display:none;"/>
                
              </div>
              <div class="form-group"><span class="text-danger">{{$errors->first('news_image')}}</span></div>
            </div>
          </div>
          
          <div class="form-group">
            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>
        {!!Form::close()!!}
      </div>
    </div>
  </div>
  @endsection