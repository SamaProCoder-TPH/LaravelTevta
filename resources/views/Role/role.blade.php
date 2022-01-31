@extends('layouts.main')

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
          <form class="row g-3" method="POST" action="{{ route('addRole')}}">
            @csrf
            <div class="col-md-6">
                <label class="form-label" for="role_name">Name</label>
                <input class="form-control @error('role_name') is-invalid @enderror" id="role_name" type="text" name="role_name">
            </div>
            @error('role_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $role_name }}</strong>
                                    </span>
                                @enderror
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Add Role</button>
            </div>
            </form>
        </div>
    </div> 
@endsection
