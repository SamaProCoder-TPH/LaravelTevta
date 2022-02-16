@extends('layouts.main')

@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
      </li>
      <li class="breadcrumb-item active"><span>Dashboard</span></li>
    </ol>
  </nav>
</div>
</header>


<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- <div class="row"> -->
      <form class="row g-3" method="POST" action="{{ route('register') }}">
       @csrf

       <div class="col-md-6">
        <label class="form-label" for="first_name">First Name</label>
        <input class="form-control @error('first_name') is-invalid @enderror"value="{{ old('first_name') }}" required autocomplete="first_name" autofocus id="first_name" type="text">
        @error('first_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label" for="last_name">Last Name</label>
        <input class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus id="last_name" type="text">
        @error('last_name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label" for="phone">Phone Number</label>
        <input class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required autocomplete="phone" autofocus id="phone" type="tel">
        @error('phone')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="col-md-6">
        <label class="form-label" for="email">Email</label>
        <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus  id="email" type="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="col-md-6">
        <label class="form-label" for="user_id">User ID</label>
        <input class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" required autocomplete="user_id" autofocus id="user_id" type="text">
        @error('user_id')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="col-md-6">
        <label class="form-label" for="password">Password</label>
        <input class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password" autofocus  id="password" type="password">
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>


      <div class="col-md-6">
        <label class="form-label" for="code">Code</label>
        <input class="form-control @error('code') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="code" autofocus  id="code" type="text">
        @error('code')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="col-md-4">
        <label class="form-label" for="role">User Type</label>
        <select class="form-select @error('role') is-invalid @enderror" required id="role">
          <option selected>Choose...</option>
          <option>Administrator</option>
          <option>Board</option>
          <option>Institute</option>
        </select>
         @error('role')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" id="status" type="checkbox">
          <label class="form-check-label" for="status">Active/InActive</label>
        </div>

      </div>
      <div class="col-12">
        <button class="btn btn-primary" type="submit">Sign in</button>
      </div>
    </form>
    <!-- </div> -->
  </div>
</div> 

@endsection
