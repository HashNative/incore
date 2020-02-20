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
              <li class="breadcrumb-item"><a href="/">Home</a></li>
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
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped table-responsive ">
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
                                                <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                                                <span class="username">
                                                  <a href="#">Sarah Ross</a>
                                                  <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                                                </span>
                                                <span class="description">follow up : {{ $followup->follow_up}}</span>
                                            </div>
                                              <!-- /.user-block -->
                                            
                                              <p>
                                              {{ $followup->description}}
                                              </p>
                                              @endif
                                              @endforeach
                                              <form class="form-horizontal"action = "{{route('follow_up.store',$inquiry->id)}}" method = "POST" class="needs-validation" novalidate >
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
                                                        <input name="description" class="form-control form-control-sm"  id ="description" required>

                                                        <div class="input-group-append">

                                                          <button type="submit" class="btn btn-danger">Save</button>
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
                                  <div class="modal-dialog modal-default">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h4 class="modal-title">Assign To</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">×</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <div class="form-group">
                                            <form action = "{{route('assign.store')}}" method = "POST" class="needs-validation" novalidate>
                                              
                                                    {{csrf_field()}}         
                                            
                                                
                                                    <label for ="inquiry_by"></label> 
                                                    <input type ="hidden" name="inquiry_by" class="form-control" id ="inquiry_by" value = "{{ $inquiry->inquiry_by}}" required>
                                                  
                                                    <label for ="inquiry_id"></label> 
                                                    <input type ="hidden" name="inquiry_id" class="form-control" id ="inquiry_id" value = "{{ $inquiry->id}}"  required>
                                                  
                                                <div class="col-sm-4">
                                                  <!-- text input -->
                                                  <div class="form-group">
                                                    <label for ="assignto">Assign To</label> 
                                                    <select type ="text" class="form-control"  name ="assignto" id ="assignto"  required>
                 
                                                            @foreach ($users as $user)
                                                            <option >{{ $user->name}}</option>
                                                            @endforeach
                                                          
                                                      </select>
                                                  </div>
                                                </div>
                                            
                                                
                                                                  
                                                <div class="col-sm-5">
                                                  <div class="form-group">
                                                    <label for="date">Next Followup Date</label>
                                                    <input type ="date" name ="date" id="exampleInputdate1"  class="form-control"  placeholder="Enter the date"aria-describedby="exampleInputdate-error" aria-invalid="true" required></span>
                                                      
                                                  </div>
                                                </div>      
                                                                
                                            
                                    
                                            <button type="submit" value="Save" class="btn bg-gradient-success float-right ">Save</button>

                                        </form>
                                      </div>
                                  </div>
                                  <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                      <!-- timeline time label -->
                                      <div class="time-label">
                                        <span class="bg-danger">
                                         next followups
                                        </span>
                                      </div>
                                      <!-- /.timeline-label -->
                                      <!-- timeline item -->
                                      <div>
                                        <i class="fas fa-envelope bg-primary"></i>
                                        @foreach ($assigns as $assign)
                                            @if($inquiry->id == $assign->inquiry_id)
                                      
                                        <div class="timeline-item">
                                          <span class="time"> <b>{{$assign->schedule_date}}</b></span>

                                          <h3 class="timeline-header"><b>{{$assign->assign_to}}</b></h3>
                                         
                                          <div class="timeline-body">
                                  
                                         
                                            
                                                {{ $assign->inquiry_by}} &nbsp;is assigned the next followup for &nbsp;&nbsp;{{$assign->assign_to}}
                                                </div>
                                                <div class="timeline-footer">
                                                 
                                                </div>
                                          </div>
                                          <br>
                                              <!-- END timeline item -->
                                            @endif
                                          @endforeach
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div> 
                              </div>    
          @endforeach
             </tbody>
            
            </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
      
@endsection