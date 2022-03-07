@extends('layouts.main')
@section('title', 'Initialize Password')
@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
      </li>
      <li class="breadcrumb-item active"><span>Initialize Password</span></li>
    </ol>
  </nav>
</div>
</header>


<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- <div class="row"> -->
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
        @if(Session::has('invalidUsername'))
          <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('invalidUsername') }}</p>
          @endif
          <div class="card mb-4">
          
            <div class="card-header">Initialize Password</div>
            <div class="card-body">
            <form class="row g-3" method="POST" action="{{ route('initializePasswordSave') }}">
                @csrf

                <div class="col-md-6">
                    <!-- <label class="form-label" for="username">User name</label>
                    <input  name="username" class="form-control @error('username') is-invalid @enderror" value="{{ $user->username ?? old('username') }}" required autocomplete="username" autofocus id="username" type="text"> -->
                    <label for="username">Select User</label>
                    <select name="username" id="username" class="form-control">
                      <option value="" selected disabled>----- Select User ----</option>

                      @foreach ((App\Models\User::where('status','active')->get()) as $user)
                        <option value="{{ $user->username }}">{{ $user->username }}</option>
                      @endforeach

                    </select>
                   
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6">
                    
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="password">Password</label>
                    <input name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password" autofocus  id="password" type="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6">
                    
                    </div>
                <div class="col-md-6">
                    <label class="form-label" for="password">Confirm Password</label>
                    <input name="password_confirmation" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password" autofocus  id="password" type="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-12">
        <button class="btn btn-primary" type="submit">OK</button>
        <button class="btn btn-secondary" type="reset">Reset</button>

      </div>
            </form>
            </div>
        </div>
    </div>

     
    <!-- </div> -->
  </div>
</div> 


@endsection
@section('javascript')
$(document).ready(function() {
    $('#username').select2();
});

@if(Session::has('message'))
Swal.fire(
  'Password Changed!',
  '{{ Session::get('message') }}',
  'success'
)
@endif
@endsection
