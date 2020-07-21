@extends('Layouts.master')
@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">

      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
          <li class="breadcrumb-item active"><a href="{{route('student.index')}}">Role</a></li>
        </ol>
      </div>
    </div>
    <div class="0"></div>
  </div><!-- /.container-fluid -->
</section>

<div class="d-flex justify-content-center">
  <div class="col-md-8">
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title"><b>Create Role</b></h3>
      </div>

      <form role="form" action="{{route('student.store')}}" method="post">
        {{csrf_field()}}
        <div class="card-body">
        <div class="table-responsive">
        <div  class ="col-md-8">
    <div class="from-group">
        <label for ="name">Role Name</label>
        <input type ="text" name ="name" id="exampleInputsource1"  id ="name"  placeholder="Enter the Role Name"class="form-control" aria-describedby="exampleInputsource-error" aria-invalid="true" required>
    </div> 
    </div>
    <br>
            <table class="table table-striped">
              <thead>
                <tr>

                  <th></th>
                  <th>Create </th>
                  <th>Update </th>
                  <th>View</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Dashboard</td>
                  <td> - </td>
                  <td> - </td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewDashboard"></td>
                  <td> - </td>
                </tr>
                <tr>
                  <td>Roles</td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="createRole"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateRole"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewRole"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="deleteRole"></td>
                </tr>
                <tr>
                  <td>Course</td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="createUser"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateUser"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewUser"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="deleteUser"></td>
                </tr>
                <tr>
                  <td>Batch</td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="createSupplier"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateSupplier"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewSupplier"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="deleteSupplier"></td>
                </tr>
                <tr>
                  <td>Inquiry</td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="createCustomer"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateCustomer"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewCustomer"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="deleteCustomer"></td>
                </tr>
                <tr>
                  <td>Staff</td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="createEmployee"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateEmployee"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewEmployee"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="deleteEmployee"></td>
                </tr>
                <tr>
                  <td>Examination</td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="createMainStock"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateMainStock"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewMainStock"></td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="deleteMainStock"></td>
                </tr>
                
                <tr>
                  <td>Reports</td>
                  <td> - </td>
                  <td> - </td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="viewReport"></td>
                  <td> - </td>
                </tr>
                <tr>
                  <td>Setting</td>
                  <td> - </td>
                  <td><input type="checkbox" name="permission[]" id="permission" value="updateSetting"></td>
                  <td> - </td>
                  <td> - </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          <input type="submit" class=" float-right btn bg-gradient-success " value="register">
          <a href="{{URL::previous()}}" class="btn bg-gradient-primary ">Back</a>
        </div>
      </form>



    </div>
  </div>
</div>




    </div>
  </div>
</div>

@endsection