@extends('home')
@section('content')
<div class="container">
  <span>
    <h2>My News</h2>
  </span>
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        {!! Form::submit('Last 7 Days Posts', ['class' => 'btn btn-primary']) !!}
        {!! Form::submit('Last 30 Days Posts', ['class' => 'btn btn-primary']) !!}
        {!! Form::submit('View All Posts', ['class' => 'btn btn-primary']) !!}
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive table--no-card m-b-40">
        <table class="table table-striped">
          <tbody>
            <tr>
              <td>Title</td>
              <td>Category</td>
              <td>Detail</td>
              <td>Image</td>
              <td >Edit</td>
              <td>Delete</td>
            </tr>
            @foreach ($newsInfo as $key=>$value)
            <tr>
              <td>{{ $value->news_title }}</td>
              <td>{{ $value->news_category }}</td>
              <td>{{ $value->news_detail }}</td>
              <td><img src="{{asset('images/'.$value->news_image)}}" width="50" height="50"/>
              </td>
              <td>
                <div class="form-group">
                  {!!Form::open(['route'=>['newsEditShow',$value->id],'method'=>'get'])!!}  
                  {!!Form::submit('Edit', ['class' => 'btn btn-sm btn-primary']) !!}
                  {!!Form::close()!!}
                </div>
              </td>
              <td>
                <div class="form-group">
                  {!!Form::open(['route'=>'newsDelete','method'=>'post'])!!}
                  {!!Form::hidden('hiddenpostid', $value->id) !!}  
                  {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','onclick' => "return confirm('Are you sure to delete this post?')"]) !!}
                  {!!Form::close()!!}
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>   
</div>
@endsection