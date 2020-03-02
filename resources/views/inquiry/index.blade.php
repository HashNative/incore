@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row md-2">
          <div class="col-md-6">

          <a href="{{route('inquiry.create')}}"  class="btn  btn-primary" tittle="show details">
    <i class="fas fa-plus"></i> New Inquiry
     </a>
          
            
          </div>
          <div class="col-md-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Inquiry</li>
              
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>

     
 <!-- Main content -->
 <section class="content">
      <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Inquiry Details  </h3>
                </div>
                <div>
                  <div class="card">
                        <div class="card-header p-2">
                          <ul class="nav nav-pills">
                          
                            @foreach($ids as $id)
                            <li class="nav-item"><a class="nav-link <?php if($id->follow_up == 1) echo("active")?>" href="#activity-{{$id->follow_up}}" data-toggle="tab">{{$id->follow_up}}</a></li>
                            @endforeach
                              
                          </ul>
                             
                        </div>
                        <div class="card-body">
                              
                          <div class="tab-content">
                              
                              @foreach($ids as $id)
                                <div class="tab-pane <?php if($id->follow_up == 1) echo("active")?>" id="activity-{{$id->follow_up}}">
                                  <table id="example1" class="table table-bordered table-striped table-responsive">
                                        <thead>
                                        <tr>
                                        
                                        <th>Source </th>
                                        <th>Description</th>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Status</th>
                                        <th>Phone number</th>
                                        <th>Title</th>
                                        <th>Inquiry by</th>
                                        <th>Email</th>
                                        <th>Followup</th>
                                        <th>Date Time</th>
                                        <th>Actions</th>  

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($inquiries as $inquiry)
                                          @if($id->follow_up == $inquiry->follow_up)         
                                        <tr>
                                            
                                            <td>{{ $inquiry->source}}</td>
                                            <td style="width:40em; word-break: break-all">{{ $inquiry->description}}</td>
                                            <td>{{ $inquiry->name}}</td>
                                            <td>{{ $inquiry->course_name}}</td>
                                            <td>{{ $inquiry->status}}</td>
                                            <td>{{ $inquiry->phone_number}}</td>
                                            <td>{{ $inquiry->title}}</td>
                                            <td>{{ $inquiry->inquiry_by}}</td>
                                            <td>{{ $inquiry->email}}</td>
                                            <td data-toggle="modal" data-target="#modal-{{ $inquiry->id}}">{{ $inquiry->follow_up}}
                                                  
                                            </td>
                                            <td>{{ $inquiry->date_time}}</td>
                                            <td>
                                              
                                                <form action = "{{route('inquiry.destroy',$inquiry->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                                                    <input type = "hidden" name = "_method" value = "delete"> 
                                                    
                                                    {{csrf_field()}}
                                                    <a data-toggle="modal" data-target="#modal-info-{{ $inquiry->id}}" class=" btn btn-sm fa fa-share-square"></a>
                                                    <a href="{{route('inquiry.edit',$inquiry->id)}}" tittle="edit details"class=" btn btn-sm fas fa-edit"style="color:#ffc107">  </a>  
                                                
                                                    <button type="submit"class="btn btn-sm" ><i tittle="delete details"class= "fa fa-trash"style="color:#cc0000"></i></button>
                                                  
                                                </form>
                                            </td>
                                                  <div class="modal fade" id="modal-{{ $inquiry->id}}" style="display: none;" aria-hidden="true">
                                                      <div class="modal-dialog modal-lg">
                                                          <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h4 class="modal-title">{{ $inquiry->name}}</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">×</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            <div class="form-group">
                                                              <div class="card-body">
                                                                  <div class="tab-content">
                                                                    <div class="active tab-pane" id="activity">
                                                                      @foreach ($followups as $followup)
                                                                        @if($inquiry->id == $followup->inquiry_id)
                                                                      <!-- Post -->
                                                                      <div class="post clearfix">
                                                                        <div class="user-block">
                                                                          <img class="img-circle img-bordered-sm" src="{{asset('dist/img/user7-128x128.jpg')}}" alt="User Image">
                                                                          <span class="username">
                                                                            <a href="#">{{$followup->inquiry_by}}</a>
                                                                            <div style ="float:right">
                                                                      
                                                                            <form action = "{{route('follow_up.destroy',$followup->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                                                                              <input type = "hidden" name = "_method" value = "delete"> 
                                                                              
                                                                              {{csrf_field()}}
                                                                              
                                                                              <a data-toggle="modal" data-target="#modal-default-{{ $followup->id}}" tittle="edit details"class=" btn btn-sm fas fa-edit"style="color:#ffc107">  </a>  
                                                                          
                                                                              <button type="submit"class="btn btn-sm" ><i tittle="delete details"class= "fa fa-trash"style="color:#cc0000"></i></button>
                                                                            
                                                                            </form>
                                                                            </div>
                                                                          </span>
                                                                          <span class="description">follow up : {{ $followup->follow_up}}</span>
                                                                          <br>
                                                                          <p>
                                                                        {{ $followup->description}}
                                                                        </p>
                                                                            <div class="modal fade" id="modal-default-{{ $followup->id}}">
                                                                              <div class="modal-dialog">
                                                                                <div class="modal-content bg-default">
                                                                                  <div class="modal-header">
                                                                                    <h4 class="modal-title">Edit Followup</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                      <span aria-hidden="true">&times;</span></button>
                                                                                  </div>
                                                                                  <div class="modal-body">
                                                                                    <form action = "{{route('follow_up.update',$followup->id)}}" method = "POST" class="needs-validation" >
                                                                                      <input type = "hidden" name = "_method" value="put">
                                                                                        {{csrf_field()}}
                              
                                                                                          <label for ="description"></label> 
                                                                                          <input type ="text" name="description" class="form-control" id ="description" value = "{{ $followup->description}}" required>
                                                                                          <div class="invalid-feedback">
                                                                                            Please Enter Description.
                                                                                          </div>
                                                                                          <div class="modal-footer justify-content-between">
                                                                                      
                                                                                            <button type="submit" class="btn  btn-outline-success btn-sm">Save changes</button>
                                                                                          </div>
                                                                                      </form>
                                                                                  </div>
                                                                                  
                                                                                  
                                                                                </div>
                                                                                <!-- /.modal-content -->
                                                                              </div>
                                                                              <!-- /.modal-dialog -->
                                                                            </div>
                                                                        </div>
                                                                      
                                                                        <!-- /.user-block -->
                                                                      </div>
                                                                        
                                                                        @endif
                                                                        @endforeach
                                                                        <form class="form-horizontal"action = "{{route('follow_up.store',$inquiry->id)}}" method = "POST" class="needs-validation" >
                                                                        {{csrf_field()}}         
                                                                      
                                                                                <div class="input-group input-group-sm mb-0">
                                                                                                <div class="row">
                                                                                                  <div class="col-sm-4">
                                                                                                    <!-- text input -->
                                                                                                    <div class="form-group">
                                                                                                  
                                                                                                    @foreach ($followups1 as $followup1)
                                                                                                      @if($inquiry->id == $followup1->inquiry_id)
                                                                                                      <?php  $followup1->count = $followup1->count + 1 ?>
                                                                                                    
                                                                                                        <label for ="follow_up"></label> 
                                                                                                          <input type ="hidden" name="follow_up" class="form-control" id ="follow_up" value = "{{ $followup1->count}}" required>
                                                                                                          @endif
                                                                                                    @endforeach
                                                                                                    </div>
                                                                                                </div>
                                                                                                  <div class="col-sm-4">
                                                                                                    <!-- text input -->
                                                                                                    <div class="form-group">
                                                                                                      <label for ="inquiry_by"></label> 
                                                                                                      <input type ="hidden" name="inquiry_by" class="form-control" id ="inquiry_by" value = "{{ $inquiry->inquiry_by}}" required>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                  <div class="col-sm-4">
                                                                                                    <!-- text input -->
                                                                                                    <div class="form-group">
                                                                                                      <label for ="inquiry_id"></label> 
                                                                                                      <input type ="hidden" name="inquiry_id" class="form-control" id ="inquiry_id" value = "{{ $inquiry->id}}" required>
                                                                                                    </div>
                                                                                                  </div>
                                                                                                      
                                                                                </div>

                                                                                <div class="input-group input-group-sm mb-0">
                                                                                  <input name="description" class="form-control form-control-sm"  id ="description" required>
                                                                                          <div class="invalid-feedback">
                                                                                            Please Enter Description.
                                                                                          </div>
                                                                                  <div class="input-group-append">
                                                                                    <button type="submit" class="btn btn-success">Save</button>
                                                                                  </div>
                                                                                </div>
                                                                                
                                                                        </form>
                                                                    
                                                                    </div>
                                                                  </div>
                                                              </div>
                                                            </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                                            
                                        </tr>
                                                      <div class="modal fade" id="modal-info-{{ $inquiry->id}}" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                          <div class="modal-content">
                                                              <div class="modal-header">
                                                                <h4 class="modal-title">Assign To</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">×</span>
                                                                </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                  <div class="form-group">
                                                                    <form action = "{{route('assign.store')}}" method = "POST" class="needs-validation">
                                                                            {{csrf_field()}} 

                                                                      

                                                                        <label for ="inquiry_by"></label> 
                                                                        <input type ="hidden" name="inquiry_by" class="form-control" id ="inquiry_by" value = "{{ $inquiry->inquiry_by}}" required>
                                                                      
                                                                        <label for ="inquiry_id"></label> 
                                                                        <input type ="hidden" name="inquiry_id" class="form-control" id ="inquiry_id" value = "{{ $inquiry->id}}"  required>
                                                                          
                                                                        

                                                                        <div class="row">
                                                                        <div class="col-sm-4">
                                                                          <div class="form-group">
                                                                            <label for ="assignto">Assign To</label> 
                                                                            <select type ="text" class="form-control"  name ="assignto" id ="assignto"  required>
                                          
                                                                                    @foreach ($users as $user)
                                                                                    <option >{{ $user->name}}</option>
                                                                                    @endforeach
                                                                                  
                                                                            </select>
                                                                          </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label for ="language">Language</label>
                                                                                <select type ="text" name ="language" id ="language" class="form-control" >
                                                                                <option value="English" selected >English</option>
                                                                                <option value="Tamil">Tamil</option>
                                                                                <option value="Sinhala">Sinhala</option></select>
                                                                        </div>  
                                                                        <div class="col-sm-4">
                                                                          <div class="form-group">
                                                                            <label for="date"> Next Followup Date</label>
                                                                            <input type ="date" name ="date" id="exampleInputdate1"  class="form-control"  placeholder="Enter the date"aria-describedby="exampleInputdate-error" aria-invalid="true" required></span>
                                                                              
                                                                          </div>
                                                                          <button type="submit" value="Save" class="btn bg-gradient-success float-right ">Save</button>
                                                                        </div>
                                                                       
                                                                      
                                                                       
                                                              
                                                                    </form>
                                                                  </div>
                                                                 

                                                              </div>
                                                                      
                                                              <div class="tab-pane" id="timeline">
                                                                  <div class="timeline timeline-inverse">
                                                                    <div class="time-label">
                                                                      <span class="bg-danger">
                                                                      next followups
                                                                      </span>
                                                                    </div>
                                                                    <div>
                                                                      @foreach ($assigns as $assign)
                                                                            @if($inquiry->id == $assign->inquiry_id)
                                                                          <i class="fas fa-envelope bg-primary"></i>
                                                                          <div class="timeline-item">
                                                                                  <span class="time"> <b>{{$assign->schedule_date}}</b></span>

                                                                                  <h3 class="timeline-header"><b>{{$assign->assign_to}}</b></h3>
                                                                                
                                                                                  <div class="timeline-body">
                                                                                    
                                                                                    {{ $assign->inquiry_by}} &nbsp;is assigned the next followup for &nbsp;&nbsp;{{$assign->assign_to}}
                                                                                  </div>
                                                                          </div>
                                                                          <br>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                    
                                                                  </div>
                                                              </div>
                                                          </div>
                                                        </div> 
                                                      </div> 
                                                  
                                        @endif  
                                        @endforeach
                                      </tbody>
                                
                                  </table>
                                </div>
                                
                              @endforeach
                          </div>
                        </div>
                  </div>
                </div>
                </div>
              </div>
            </div>
      </div>
  </section>
  <script>
  (function() {
'use strict';
window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();
</script>
                
@endsection
