@extends('layouts.master')
@section('content')
<table class="table table-striped table-bordered table-hover">

 <tr>
 <th>Course Id </th>
 <td>{{$course -> course_id}}</td>
</tr>

<tr>
 <th>Course Name </th>
 <td>{{$course -> course_name}}</td>
</td>
</tr>

<tr>
 <th>Registration Date </th>
 <td>{{$course -> registration_date}}</td>
</tr>

<tr>
<th>Course Fees</th>
 <td>{{$course -> course_fees}}</td>
</tr>

<tr>
<th>Description</th>
<td>{{$course -> description}}</td>
</tr>

<tr>
<th>Start By</th>
<td>{{$course -> start_by}}</td>
</tr>

<tr>
<th>End By</th>
<td>{{$course -> end_by}}</td>
</tr>
</table>
<div>
<a href ="{{URL::previous()}}" class="btn btn-primary float-left">Back</a>
</div>
@endsection

  
