@extends('layouts.main')
@section('title', 'Users List')
@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
      </li>
      <li class="breadcrumb-item active"><span>User</span></li>
    </ol>
  </nav>
</div>
</header>


<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- <div class="row"> -->
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header">List of Users <a href="{{ route('register') }}" class="btn btn-info" style="float:right;">Add User</a></div>

            <div class="card-body">

            <table id="example" class="table striped" >
                <thead>
                  <tr>
                    <th>Nr</th>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Telephone</th>
                    <th>User Type</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($user as $user)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td><a href="{{ route('editUser',['id' => Crypt::encrypt($user->id)])}}">{{ $user->username}}</a></td>
                    <td>{{ $user->firstname}}</td>
                    <td>{{ $user->lastname}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->phonenumber}}</td>
                    <td>{{ $user->role}}</td>
                    <td><input type="checkbox" id="checkbox" name="checkbox" /></td>

                  </tr>
                  @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

     
    <!-- </div> -->
  </div>
</div> 

@endsection

@section('javascript')

  $(document).ready(function() {
      $('#example').DataTable();
  } );

@endsection

