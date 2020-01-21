@extends('layouts.master')
@section('content')
<table>

 <tr>
 <td>
 <h1 >Course Id </h1>{{$course -> course_id}}
</td>
</tr>
<br>
<br>
<tr>
 <td>
 <h1 >Course Name </h1>{{$course -> course_name}}
</td>
</tr>
<tr>
 <td>
 <h1 >Registration Date </h1>{{$course -> registration_date}}
</td>
</tr>
<tr>
 <td>
 <h1 >Course Fees</h1>{{$course -> course_fees}}
</td>
<td>
 <h1 >Description</h1>{{$course -> description}}
</td>
<td>
 <h1 >Start By </h1>{{$course -> start_by}}
</td>
<td>
 <h1 >End By</h1>{{$course -> end_by}}
</td>
</tr>

@endsection

  
