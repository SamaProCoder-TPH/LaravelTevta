@extends('layouts.main')
@section('title', 'Close Session')
@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Data Processing</span>
      </li>
      <li class="breadcrumb-item active"><span>Enter Year</span></li>
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
            <div class="card-header">Enter Year</div>
            <div class="card-body">
              <!-- content here -->
              <div class="body flex-grow-1 px-3">
                <div class="container-lg">
                <form class="row g-3" method="POST" action="{{ route('addRole')}}">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label" for="year">Enter Year</label>
                        <input class="form-control @error('year') is-invalid @enderror" id="year" type="text" name="year">
                    </div>
                    @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                   
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">OK</button>
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