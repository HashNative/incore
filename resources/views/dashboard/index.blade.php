<?php  $total_count=100; ?>

@extends('layouts.master')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
              <li class="breadcrumb-item">Dashboard</li>
            </ol>
          </div>
        </div><div class="0"></div>
      </div><!-- /.container-fluid -->
</section>

    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user-alt"></i></span>
             
              <div class="info-box-content">
                <span class="info-box-text">Student</span>
              
                <span class="info-box-number">
                {{ $count1}}
                  <small></small>
             </span>
           
              </div>
             
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-graduation-cap"></i></span>
             
              <div class="info-box-content">
                <span class="info-box-text">Course</span>
               
                <span class="info-box-number"> {{$count3}}</span>
             
              </div>
            
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tachometer-alt"></i></span>
              
              <div class="info-box-content">
             
                <span class="info-box-text">Inquiry</span>
               
                <span class="info-box-number">{{ $count}}</span>
               
              </div>
             
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-plus"></i></span>
            
              <div class="info-box-content">
                <span class="info-box-text">Staff</span>
                
                <span class="info-box-number">{{ $count2}}</span>
               
              </div>
             
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
          
                  <div class="card-header">
                    <h3 class="card-title">Inquiry</h3>  <br>
                    <div  class="float-right">
                        <form action="{{route('admin.store')}}"method = "post">
                                {{csrf_field()}}
                                <label for="from">From :</label> &nbsp;
                                <input id="from" name="from"class="form-control-sm" type="date" placeholder="From"> &nbsp;
                                <label for="to">To :</label> &nbsp;
                                <input id="to" name="to"class="form-control-sm" type="date" placeholder="To" >&nbsp;

                                <button type="submit "class="btn-info form-control-sm" value="submit" >Search</button>
                        </form>
                    </div>
                  </div>
                
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <table class="table table-lg">
                      <thead>
                        <tr>
                        
                          <th>Operator</th>
                          <th>Total</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($inquiries as $inquiry)
                        <tr >
                              <td>{{ $inquiry->inquiry_by}}</td>
                              <td>{{ $inquiry->count}}</td>
                              
                              @foreach ($sources as $source)
                              @if($inquiry->inquiry_by == $source->inquiry_by )
                            
                              <th>{{$source->source}}</th>
                              <td></td>
                              <td>{{$source->counta}}</td>
                              @endif
                              @endforeach
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
            </div>
            
          </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    PERFORMANCE | Inquiry 
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="donut-chart" style="height: 300px; padding: 0px; position: relative;">
                    <canvas class="flot-base" width="320" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 320px; height: 300px;"></canvas>
                    <canvas class="flot-overlay" width="320" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 320px; height: 300px;"></canvas>
                    <span class="pieLabel" id="pieLabel0" style="position: absolute; top: 70px; left: 217.953px;">
                      
                </div>
              </div>
            </div>
        </div>
        
            <div class="col-md-6">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    PERFORMANCE | Registration 
                  </h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div id="pie-chart" style="height: 300px; padding: 0px; position: relative;">
                    <canvas class="flot-base" width="320" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 320px; height: 300px;"></canvas>
                    <canvas class="flot-overlay" width="320" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 320px; height: 300px;"></canvas>
                    <span class="pieLabel" id="pieLabel0" style="position: absolute; top: 70px; left: 217.953px;">
                  </div>
                </div>
              </div>
            </div>
        </div>
     
    </section>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                 <h3 class="card-title">Registrations</h3> <br>
                 <div  class="float-right">
                    <form action="{{route('admin.store')}}"method = "post">
                        {{csrf_field()}}
                            <label for="from">From :</label> &nbsp;
                            <input id="from" name="from"class="form-control-sm" type="date" placeholder="From"> &nbsp;
                            <label for="to">To :</label> &nbsp;
                            <input id="to" name="to"class="form-control-sm" type="date" placeholder="To" >&nbsp;

                            <button type="submit "class="btn-info form-control-sm" value="submit" >Search</button>
                    </form>
                </div>
                </div>
                
                <div class="card-body p-0">
                  <table class="table table-lg">
                    <thead>
                      <tr>
                      
                        <th>Operator</th>
                        <th>Total</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($inquiries1 as $inquiry)
                      <tr >
                            <td>{{ $inquiry->inquiry_by}}</td>
                            <td>{{ $inquiry->countc }}</td>
                            
                            @foreach ($sources1 as $source)
                                    @if($inquiry->inquiry_by == $source->inquiry_by)
                          
                            <th>{{$source->source}}</th>
                            <td></td>
                            <td>{{$source->countb}}</td>
                            @endif
                            @endforeach
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
           </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                   
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                        <p class="text-center">
                          <strong>Goal Completion</strong>
                        </p>
                        @foreach ($courses as $course)
                        <div class="progress-group">
                          {{$course->course_name}}
                            <span class="float-right">
                                  @foreach ($courses1 as $course1)
                                  @if($course->course_name == $course1->course_name)
                                      <b>{{$course1->countx}}</b>
                                  
                                /<b>{{$course->count}}</b>
                            </span>
                            <div class="progress progress-sm">
                              <div class="progress-bar bg-primary" style="width: <?php $x =($course1->countx/$course->count)*100; echo($x)?>%"></div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                      @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                      <h5 class="card-title">Monthly Recap Report</h5>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                      <div class="position-relative mb-4">
                        <canvas id="sales-chart" height="200"></canvas>
                      </div>
                    <div class="d-flex flex-row justify-content-end">
                      <span class="mr-2">
                        <i class="fas fa-square text-primary"></i> Inquiries
                      </span>

                      <span>
                        <i class="fas fa-square text-gray"></i> Registrations
                      </span>
                
                    </div>
                </div>
          </div>
        </div>
       
       
      </div>
    </section>
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  SOURCE | Inquiry 
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                      class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">

                @foreach ($incos as $inco)
                 
                  <!-- ./col -->
                  <div class="col-6 col-md-2 text-center">
                    <input type="text" class="knob" value="{{$inco->count}}" data-skin="tron" data-thickness="0.2" data-width="120"
                           data-height="120" data-fgColor="#3c8dbc" readonly>

                    <div class="knob-label"><h4 ><strong>{{$inco->source}}</strong></h4></div>
                  </div>
                  @endforeach

                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

<?php
foreach ($inquiries as $inquiry){ 
  array_push($arr,array( 
  
    "label" => $inquiry->inquiry_by, 
    "data" => $inquiry->count ,
    "backgroundColor"=> " ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff']"
 ) ); 

} 


foreach ($inquiries1 as $inquiry){ 
  array_push($arr1,array( 
  
    "label" => $inquiry->inquiry_by, 
    "data" => $inquiry->countc ,
    "backgroundColor"=> " ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0', '#9966ff']"
    
  ) ); 

} 

foreach ($inquiries1 as $inquiry){ 
  array_push($arr2, $inquiry->inquiry_by);
  
}
foreach ($inquiries as $inquiry){ 
  array_push($arr3, $inquiry->count);  
}
foreach ($inquiries1 as $inquiry){ 
  array_push($arr4, $inquiry->countc);  
}


?>
   @endsection   
 
