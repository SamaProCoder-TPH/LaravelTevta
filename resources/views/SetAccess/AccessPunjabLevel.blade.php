@extends('layouts.main')

@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Set Access</span>
      </li>
      <li class="breadcrumb-item active"><span>Punjab Level</span></li>
    </ol>
  </nav>
</div>
</header>


<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- <div class="row"> -->
      <span><u>Set Access</u></span>
      <form class="row g-3" method="POST" action="{{ route('access_punjab')}}">
       @csrf

      
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" id="punjab_level_access" type="checkbox">
          <label class="form-check-label" for="punjab_level_access">Punjab Level Access On/Off</label>
        </div>
      </div>
      <div><span><u>Permission Punjab Level On/Off</u></span></div>
       <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" id="enter_data" type="checkbox">
          <label class="form-check-label" for="enter_data">Enter Data</label>
        </div>
      </div>
       <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" id="edit_list" type="checkbox">
          <label class="form-check-label" for="edit_list">Edit List</label>
        </div>
      </div>
       <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" id="admission_list" type="checkbox">
          <label class="form-check-label" for="admission_list">Admission List</label>
        </div>
      </div>
       <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" id="enter_attendence" type="checkbox">
          <label class="form-check-label" for="enter_attendence">Enter Attendence</label>
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
