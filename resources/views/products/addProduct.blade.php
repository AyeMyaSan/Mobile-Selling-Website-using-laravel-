

@extends('home')
@section('content')
<div class="container">
  <h2 style="font-weight: bold;">Add Product </h2>
  <div class="row">
    <div class="col-sm-6">
      {!!Form::open(['route'=>'addProduct','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

      <div class="form-group">
        {!! Form::label('model', 'Model')!!}
        {!! Form::text('model','',['class' => 'form-control', 'placeholder'=>'Model' ]) !!}
        <span class="text-danger">{{$errors->first('model')}}</span>
      </div>

      <div class="form-group">
        {!! Form::label('category', 'Category')!!}
        {!! Form::select('category', ['s' => 'Smart Phone', 't' => 'Tablet', 'l' => 'Laptop/PC'],'s', ['class'
        =>
        'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('brand', 'Brand')!!}
        {!! Form::text('brand','',['class' => 'form-control' ,'placeholder'=>'Brand' ]) !!}
        <span class="text-danger">{{$errors->first('brand')}}</span>
      </div>
      <div class="form-group">
        {!! Form::label('screenSize', 'Screen Size')!!}
        {!! Form::text('screenSize','',['class' => 'form-control' ,'placeholder'=>'ScreenSize' ]) !!}
        <span class="text-danger">{{$errors->first('screenSize')}}</span>
      </div>
      <div class="form-group">
        {!! Form::label('resolution', 'Resolution')!!}
        {!! Form::text('resolution','',['class' => 'form-control' ,'placeholder'=>'Resolution' ]) !!}
        <span class="text-danger">{{$errors->first('resolution')}}</span>
      </div>
      <div class="form-group">
        {!! Form::label('cpu', 'CPU')!!}
        {!! Form::text('cpu','',['class' => 'form-control' ,'placeholder'=>'CPU' ]) !!}
        <span class="text-danger">{{$errors->first('cpu')}}</span>
      </div>
      <div class="form-group">
        {!! Form::label('gpu', 'GPU')!!}
        {!! Form::text('gpu','',['class' => 'form-control' ,'placeholder'=>'GPU' ]) !!}
        <span class="text-danger">{{$errors->first('gpu')}}</span>
      </div>
      <div class="form-group">
        {!! Form::label('os', 'Operting System')!!}
        {!! Form::text('os','',['class' => 'form-control' ,'placeholder'=>'Operting System' ]) !!}
        <span class="text-danger">{{$errors->first('os')}}</span>
      </div>
      <div class="form-group">
        {!! Form::label('ram', 'RAM')!!}
        {!! Form::text('ram','',['class' => 'form-control' ,'placeholder'=>'RAM' ]) !!}
        <span class="text-danger">{{$errors->first('ram')}}</span>
      </div>
    </div>

    <div class="col-sm-6">

      <div class="form-group">
        {!! Form::label('memory', 'Memory')!!}
        {!! Form::text('memory','',['class' => 'form-control' ,'placeholder'=>'Memory' ]) !!}
      </div>
      <span class="text-danger">{{$errors->first('memory')}}</span>
      <div class="form-group">
        {!! Form::label('camera', 'Camera')!!}
        {!! Form::text('camera','',['class' => 'form-control' ,'placeholder'=>'Camera' ]) !!}
      </div>
      <div class="form-group">
        {!! Form::label('battery', 'Battery')!!}
        {!! Form::text('battery','',['class' => 'form-control' ,'placeholder'=>'Battery' ]) !!}
        <span class="text-danger">{{$errors->first('battery')}}</span>
      </div>
      <div class="form-group">
           {!! Form::label('color', 'Color')!!}<br>
          <input type="checkbox" name="clr[]" value="red"/>Red 
          <input type="hidden" name="clr[]" value="red" />
          <input type="checkbox" name="clr[]" value="blue"/>Blue
          <input type="hidden" name="clr[]" value="blue" />
          <input type="checkbox" name="clr[]" value="black"/>Black
          <input type="hidden" name="clr[]" value="black" />
          <input type="checkbox" name="clr[]" value="white"/>White
          <input type="hidden" name="clr[]" value="white" />
          <input type="checkbox" name="clr[]" value="silver"/>Silver
          <input type="hidden" name="clr[]" value="silver" />
          <span class="text-danger">{{$errors->first('color')}}</span> 
     
      </div>
      <div class="form-group">
        {!! Form::label('feactures', 'Other Feactures')!!}
        {!! Form::textarea('feactures','',['class' => 'form-control' ,'rows' => 5,'placeholder'=>'Other Feactures' ])
        !!}
      </div>
      <div class="form-group">
        {!! Form::label('price', 'Price')!!}
        {!! Form::text('price','',['class' => 'form-control' ,'placeholder'=>'Price' ]) !!}
        <span class="text-danger">{{$errors->first('price')}}</span>
      </div>

      <div class="form-group">
        {{ Form::label("image", 'Product Image', ['class' => 'control-label']) }}<br>
        {!! Form::file('image',['class'=>'form-group','onchange'=>'readURL(this);']); !!}
        <img id="img" src=" " style="width:70px; height:70px; display:none;" />

      </div>
      <div class="form-group"><span class="text-danger">{{$errors->first('image')}}</span></div>
      <br>
      <div class="form-group">
        {!! Form::submit('Add Product', ['class' => 'btn btn-lg btn-primary']) !!}
        {!!Form::close()!!}
      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>
@endsection

