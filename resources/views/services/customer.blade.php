@extends('home')
@section('content')

<div id="app">
  <div class="newsform">
    <div class="container">
      <span>
        <h2>Customers's Record</h2>
      </span>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            {!! Form::submit('Last 7 days Registrations', ['class' => 'btn btn-primary']) !!}
            {!! Form::submit('Last 30 days Registrations', ['class' => 'btn btn-primary']) !!}
            {!! Form::submit('View All Registrations', ['class' => 'btn btn-primary']) !!}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <div class="table-responsive table--no-card m-b-40">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">No.</th>                    
                    <td>Name</td>
                    <td>Email</td>
                    
                    <td colspan="2">Action</td>
                  </tr>
                  @foreach ($userInfo as $key=>$value)
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>                  
                    <td>
                      <div class="form-group">
                        {!! Form::submit('Reply', ['class' => 'btn btn-sm btn-primary']) !!}
                        
                      </div>
                    </td>
                    <td>
                      <div class="form-group">
                          {!!Form::open(['route'=>'customerDelete','method'=>'post'])!!}
                          {!!Form::hidden('hiddenpostid', $value->id) !!}  
                          {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
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
    </div>
  </div>
</div>
@endsection