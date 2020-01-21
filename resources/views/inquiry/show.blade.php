@extends('layouts.master')
@section('content')
<html>
<head>
</head>
<body>
<table>

 <tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Source : </h1>{{ $inquiry->source}}
</td>
</tr>
<br>
<br>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Type : </h1>{{ $inquiry->type}}
</td>
</tr>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Description : </h1>{{ $inquiry->description}}
</td>
</tr>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Staff ID : </h1>{{ $inquiry->staff_id}}
</td>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Student Id : </h1>{{ $inquiry->student_id}}
</td>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Date Time : </h1>{{ $inquiry->date_time}}
</td>
</tr>
</table>
</body>
</html>
@endsection

  
