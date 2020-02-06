@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
            
          </div>
          <div class="col-sm-6">
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
        <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Inquiry Details &nbsp; <a href="{{route('inquiry.create')}}"  class="btn  btn-primary" tittle="show details">
    <i class="fas fa-plus"></i> Add Inquiry
     </a> </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
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
              <tr data-toggle="modal" data-target="#modal-{{ $inquiry->id}}" >
                  
                  <td>{{ $inquiry->source}}</td>
                  <td style="word-break:break-all;">{{ $inquiry->description}}</td>
                  <td>{{ $inquiry->name}}</td>
                  <td>{{ $inquiry->course_name}}</td>
                  <td>{{ $inquiry->status}}</td>
                  <td>{{ $inquiry->phone_number}}</td>
                  <td>{{ $inquiry->title}}</td>
                  <td>{{ $inquiry->inquiry_by}}</td>
                  <td>{{ $inquiry->email}}</td>
                  <td>{{ $inquiry->follow_up}}</td>
                  <td>{{ $inquiry->date_time}}</td>



                  <td>
                    
                  <form action = "{{route('inquiry.destroy',$inquiry->id)}}" method = "POST" onsubmit="if(!confirm('Are you sure')){return false;}">
                          <input type = "hidden" name = "_method" value = "delete"> 
                          
                          {{csrf_field()}}
                          <a href="{{route('inquiry.edit',$inquiry->id)}}" tittle="edit details"class=" btn btn-sm fa fa-share-square";>
                          <a href="{{route('inquiry.edit',$inquiry->id)}}" tittle="edit details"class=" btn btn-sm fas fa-edit"style="color:#ffc107";>    
                      
                          <button type="submit"class="btn btn-sm" ><i tittle="delete details"class= "fa fa-trash"style="color:#cc0000";></i></button>
                  </form>
                      </td>
                
                 </tr>

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
                  <form action = "{{route('follow_up.store')}}" method = "POST" class="needs-validation" novalidate>
                    
                          {{csrf_field()}}
                        

                    
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                        <label for ="follow_up">Follow up</label> 
                          <input type ="text" name="follow_up" class="form-control" id ="follow_up" value = "{{ $inquiry->follow_up}}" required>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                          <label for ="inquiry_by">Inquiry by</label> 
                          <input type ="text" name="inquiry_by" class="form-control" id ="inquiry_by" value = "{{ $inquiry->inquiry_by}}" required>
                        </div>
                      </div>
                      
                      <div class="col-sm-12">
                        <!-- text input -->
                        <div class="form-group">
                          <label for ="description">Description</label>
                          <textarea name="description" class="form-control" id ="description"style="width: 12px; word-wrap: break-word" value = "{{ $inquiry->description}}" required></textarea>
                        </div>
                      </div>
                      </div>
              
                      <button type="submit" value="Save" class="btn bg-gradient-success float-right ">Save</button>

                  </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                    
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                     
                    </div>
                  
            </div>
          
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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