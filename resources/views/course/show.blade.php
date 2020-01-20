@extends('layouts.master')
@section('content')
<table>

 <tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Course Id </h1>{{$course -> course_id}}
</td>
</tr>
<br>
<br>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Course Name </h1>{{$course -> course_name}}
</td>
</tr>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Registration Date </h1>{{$course -> registration_date}}
</td>
</tr>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Course Fees</h1>{{$course -> course_fees}}
</td>
<td>
 <h1 class="pricing-title"  style ="color:red">Description</h1>{{$course -> description}}
</td>
<td>
 <h1 class="pricing-title"  style ="color:red">Start By </h1>{{$course -> start_by}}
</td>
<td>
 <h1 class="pricing-title"  style ="color:red">End By</h1>{{$course -> end_by}}
</td>
</tr>

@endsection

  
