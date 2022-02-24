@extends('layouts.main')
@section('title', 'Create New Session')
@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Data Processing</span>
      </li>
      <li class="breadcrumb-item active"><span>Enter Student's Result</span></li>
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
            <div class="card-header">Enter Student's Result</div>
            <div class="card-body">
              <!-- content here -->
              <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                <form class="row g-3" method="POST" action="{{ route('addRole')}}">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="session_code">Enter Session</label>
                        <input class="form-control @error('session_code') is-invalid @enderror" id="session_code" type="text" name="session_code">
                    </div>
                    @error('session_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-md-6">
                        <label class="form-label" for="centre_code">Centre Code</label>
                        <input class="form-control @error('centre_code') is-invalid @enderror" id="centre_code" type="input" name="centre_code">
                    </div>
                    @error('centre_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-md-6">
                        <label class="form-label" for="centre_code">Select Centre</label>
                        <input class="form-control @error('centre_code') is-invalid @enderror" id="centre_code" type="input" name="centre_code">
                    </div>
                    @error('centre_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <div class="col-md-6">
                        <label class="form-label" for="trade_code">Enter Trade Code </label>
                        <input class="form-control @error('trade_code') is-invalid @enderror" id="trade_code" type="input" name="trade_code">
                    </div>
                    @error('trade_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   

                    <div class="col-md-6">
                        <label class="form-label" for="trade_code">Select Group </label>
                        <input class="form-control @error('trade_code') is-invalid @enderror" id="trade_code" type="input" name="trade_code">
                    </div>
                    @error('trade_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-md-6">
                        <label class="form-label" for="limit">Select Limit (A for All or 1-50)</label>
                        <input class="form-control @error('limit') is-invalid @enderror" id="limit" type="input" name="limit">
                    </div>
                    @error('limit')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Add Session</button>
                    </div>
                    </form>
                </div>
            </div> 
              <!-- ----- -->
            </div>
        </div>
    </div>

     
    <!-- </div> -->
  </div>
</div> 
@endsection