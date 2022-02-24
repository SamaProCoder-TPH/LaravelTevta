@extends('layouts.main')
@section('title', '')
@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
      </li>
      <li class="breadcrumb-item active"><span>User List</span></li>
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
            <div class="card-header">Users List</div>
            <div class="card-body">
              <!-- content here -->
            </div>
        </div>
    </div>

     
    <!-- </div> -->
  </div>
</div> 
@endsection