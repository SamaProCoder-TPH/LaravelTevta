@extends('layouts.main')

@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
      </li>
      <li class="breadcrumb-item active"><span>User/Permission</span></li>
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
            <div class="card-header">Edit User</div>
            <div class="card-body">
      <form class="row g-3" method="POST" action="{{ route('updateUser') }}">
       @csrf
       <div class="col-md-6">
        <label class="form-label" for="username">User ID</label>
        <input disabled name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username ?? old('username') }}" required autocomplete="username" autofocus id="username" type="text">
        @error('username')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <input type="hidden" name="id" value="{{$user->id}}">
      <div class="col-md-6">
        <label class="form-label" for="role">User Type</label>
        <select name="role" class="form-select @error('role') is-invalid @enderror" required id="role">
          <option >Choose...</option>
          <option {{ ( $user->role == 'Administrator') ? 'selected' : '' }} >Administrator</option>
          <option {{ ( $user->role == 'Board') ? 'selected' : '' }}>Board</option>
          <option {{ ( $user->role == 'Institute') ? 'selected' : '' }}>Institute</option>
        </select>
         @error('role')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

       <div class="col-md-6">
        <label class="form-label" for="first_name">First Name</label>
        <input name="first_name" class="form-control @error('first_name') is-invalid @enderror"value="{{ $user->firstname ?? old('first_name') }}" required autocomplete="first_name" autofocus id="first_name" type="text">
        @error('first_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label" for="last_name">Last Name</label>
        <input name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ $user->lastname ?? old('last_name') }}" required autocomplete="last_name" autofocus id="last_name" type="text">
        @error('last_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label" for="email">Email</label>
        <input name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email ?? old('email') }}" required autocomplete="email" autofocus  id="email" type="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="col-md-6">
        <label class="form-label" for="phone">Telephone</label>
        <input name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $user->phonenumber ?? old('phone') }}" required autocomplete="phone" autofocus id="phone" type="tel">
        @error('phone')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      

      <div class="col-md-6">
      <label class="form-label" for="phone"></label>
        <div class="form-check">
          <input {{ ( $user->status == 'active') ? 'checked' : '' }} class="form-check-input" id="status" type="checkbox" name="status" value="active">
          <label class="form-check-label" for="status">Active/InActive</label>
        </div>
      </div>
      <p> <u> <strong> Permission to User </strong></u></p>
      <hr>

      <div class="col-md-12">
      <label class="form-label" for="file"></label>
        <div class="form-check">
          <label class="form-check-label" for="status">File Maintenance Module</label>
          <input {{ ( $user->can('File Module'))  ? 'checked' : '' }} class="form-check-input" id="status" type="checkbox" name="file_module" value="active">
        </div>
      </div>
      <div class="col-md-12">
      <label class="form-label" for="phone"></label>
        <div class="form-check">
          <label class="form-check-label" for="status">Data Processing Module</label>
          <input {{ ( $user->can('Data Module'))  ? 'checked' : '' }} class="form-check-input" id="status" type="checkbox" name="data_module" value="active">
        </div>
      </div>
      <div class="col-md-12">
      <label class="form-label" for="phone"></label>
        <div class="form-check">
          <label class="form-check-label" for="status">Reports Module</label>
          <input {{ ( $user->can('Reports Module')) ? 'checked' : '' }} class="form-check-input" id="status" type="checkbox" name="report_module" value="active">
        </div>
      </div>
      <div class="col-md-12">
      <label class="form-label" for="phone"></label>
        <div class="form-check">
          <label class="form-check-label" for="status">Backup Module </label>
          <input {{ ( $user->can('Backup Module'))  ? 'checked' : '' }} class="form-check-input" id="status" type="checkbox" name="backup_module" value="active">
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">OK</button>
      </div>
    </form>
        
    </div>
        </div>
    </div>
    <!-- </div> -->
  </div>
</div> 
@endsection