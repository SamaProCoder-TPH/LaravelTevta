@extends('layouts.main')
@section('title', 'Add User Type')
@section('content')
<div class="header-divider"></div>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
              <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
              </li>
              <li class="breadcrumb-item active"><span>Roles</span></li>
            </ol>
          </nav>
        </div>
      </header>


      <div class="body flex-grow-1 px-3">
  <div class="container-lg"> 
    
    @if(Session::has('RoleAdded'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible fade show" role="alert">
          <div class="fw-semibold"> {{ Session::get('RoleAdded') }} </div>
          <button class="btn-close" type="button" data-coreui-dismiss="alert" aria-label="Close"></button>
        </div>
          @endif
    <!-- <div class="row"> -->
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="card mb-4">
            <div class="card-header">Add User Type</div>
            <div class="card-body">
            <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <form class="row g-3" method="POST" action="{{ route('addRole')}}">
            @csrf
            <div class="col-md-6">
                <label class="form-label" for="role_name">Name</label>
                <input class="form-control @error('role_name') is-invalid @enderror" id="role_name" type="text" name="role_name">
            </div>
            @error('role_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Add Role</button>
            </div>
            </form>
        </div>
    </div> 
            </div>
        </div>
    </div>

    
@endsection
