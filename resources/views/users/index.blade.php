@extends('layouts.user')
@section('title')
Index
@endsection
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">

      @if(session('message'))
      <h4 class="alert alert-success">{{ session('message') }}</h4>
            @endif
            
      <div class="card">
        <div class="card-header">
          <h4>User Profile          
          </h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>FULLNAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach($users as $user)
                         <tr>
                           <td>{{ $user->id }}</td>
                           <td>{{ $user->name }}</td>
                           <td>{{ $user->email }}</td>
                            <td><a href="{{url('users_index/'.$user->id.'/details')}}" id="{{ $user->id }}" class="btn btn-success btn-sm">EDIT</a></td>
                          
                         </tr>
                       
              @endforeach
            </tbody>
          </table>
        </div>
      </div>      
    </div>    
  </div>  
</div>
@endsection