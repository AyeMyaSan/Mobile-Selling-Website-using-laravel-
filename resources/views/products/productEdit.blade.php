
@extends('home')
@section('content')
        <div class="app">
          <div class="newsform">
            <div class="container">
              <span>
                <h2 style="font-weight: bold;">Edit Product</h2>
              </span>
              <div class="row">
                <div class="col-sm-6">
                  
                  {!!Form::open(['route'=>'productUpdate', 'method'=>'post', 'enctype' => 'multipart/form-data'])!!}
                  @csrf
                  <div class="form-group">
                    {!!Form::hidden('hiddenproductid', $productInfo->id) !!}
                    {!! Form::label('model', 'Model')!!}
                    {!! Form::text('model',!empty($productInfo->Model) ? $productInfo->Model : '',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('model')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('category', 'Category')!!}
                    {!! Form::select('category',['s' => 'Smart Phone', 't' => 'Tablet', 'l' => 'Laptop/PC'],!empty($productInfo->Category) ? $productInfo->Category:'', ['class'
                    =>'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('brand', 'Brand')!!}
                    {!! Form::text('brand',!empty($productInfo->Brand) ? $productInfo->Brand:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('brand')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('screenSize', 'Screen Size')!!}
                    {!! Form::text('screenSize',!empty($productInfo->ScreenSize) ? $productInfo->ScreenSize:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('screenSize')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('resolution', 'Resolution')!!}
                    {!! Form::text('resolution',!empty($productInfo->Resolution) ? $productInfo->Resolution:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('resolution')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('cpu', 'CPU')!!}
                    {!! Form::text('cpu',!empty($productInfo->CPU) ? $productInfo->CPU:'',['class' => 'form-control' ]) !!}
                    <span class="text-danger">{{$errors->first('cpu')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('gpu', 'GPU')!!}
                    {!! Form::text('gpu',!empty($productInfo->GPU) ? $productInfo->GPU:'',['class' => 'form-control' ]) !!}
                    <span class="text-danger">{{$errors->first('gpu')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('os', 'Operting System')!!}
                    {!! Form::text('os',!empty($productInfo->OS) ? $productInfo->OS:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('os')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('ram', 'RAM')!!}
                    {!! Form::text('ram',!empty($productInfo->RAM) ? $productInfo->RAM:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('ram')}}</span>
                  </div>
                </div>
                
                <div class="col-sm-6">
                  
                  <div class="form-group">
                    {!! Form::label('memory', 'Memory')!!}
                    {!! Form::text('memory',!empty($productInfo->Memory) ? $productInfo->Memory:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('memory')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('camera', 'Camera')!!}
                    {!! Form::text('camera',!empty($productInfo->Camera) ? $productInfo->Camera:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('camera')}}</span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('battery', 'Battery')!!}
                    {!! Form::text('battery',!empty($productInfo->Battery) ? $productInfo->Battery:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('battery')}}</span>
                  </div>
                  {{-- <div class="form-group">
                    {!! Form::label('color', 'Color')!!}                              
                    {!! Form::text('color',!empty($productInfo->Color) ? $productInfo->Color:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('color')}}</span>
                  </div> --}}
                  <div class="form-group">
                      {!! Form::label('color', 'Color')!!}<br>
                     <input type="checkbox" name="clr[]" value="{{$productInfo->Color}}"/>Red 
                     <input type="checkbox" name="clr[]" value="{{$productInfo->Color}}"/>Blue
                     <input type="checkbox" name="clr[]" value="{{$productInfo->Color}}"/>Black
                     <input type="checkbox" name="clr[]" value="{{$productInfo->Color}}"/>White
                     <input type="checkbox" name="clr[]" value="{{$productInfo->Color}}"/>Silver
                 </div>
                  <div class="form-group">
                    {!! Form::label('feactures', 'Other Feactures')!!}
                    {!! Form::textarea('feactures',!empty($productInfo->Other_Feactures) ? $productInfo->Other_Feactures:'',['class' => 'form-control' ,'rows' => 5 ])!!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('price', 'Price')!!}                    
                    {!! Form::text('price',!empty($productInfo->Price) ? $productInfo->Price:'',['class' => 'form-control']) !!}
                    <span class="text-danger">{{$errors->first('price')}}</span>
                  </div>
                  <div class="form-group">
                    {{ Form::label("image", 'image', ['class' => 'control-label']) }}
                    <i class="fas fa-file-image fa-lg"></i><br>
                    {!! Form::file('image',['class'=>'form-group','onchange'=>'readURL(this);']); !!}
                    <img id="img" src="{{asset('images/'.$productInfo->Image)}}"  style="width:100px; height:100px;"/>
                  </div>
                  <div class="form-group"><span class="text-danger">{{$errors->first('image')}}</span></div>
                  <br>
                  <div class="form-group">
                    {!! Form::submit('Update', ['class' => 'btn btn-lg btn-primary']) !!}
                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection 