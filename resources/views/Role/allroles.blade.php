@extends('layouts.main')
@section('title', 'User Types')
@section('content')
<div class="header-divider"></div>
<div class="container-fluid">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb my-0 ms-2">
      <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
      </li>
      <li class="breadcrumb-item active"><span>User Types</span></li>
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
            <div class="card-header">List of User Types  <a href="{{ route('addRole') }}" class="btn btn-secondary" style="float:right;">Add Role</a></div>
            <div class="card-body">

            <table id="example" class="table striped" >
                <thead>
                  <tr>
                    <th>Nr</th>
                    <th>User Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($roles as $role)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $role->name}}</td>
                    <td><input data-id="{{$role->id}}" class="changeStatus" type="checkbox" id="checkbox" name="checkbox" {{ $role->status == 'Active' ? 'checked' : '' }} /></td>

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


  $(function() {
    $('.changeStatus').change(function() {
        var status = $(this).prop('checked') == true ? 'Active' : 'Inactive'; 
        var role_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatusRole',
            data: {'status': status, 'role_id': role_id},
            success: function(data){
              console.log(data.success)
              toastr.info("Status changed Successfully");
            }
        });
    })
  })
@endsection

