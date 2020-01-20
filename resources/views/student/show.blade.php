@extends('layouts.master')
@section('content')
<html >
<head>

</head>
<body>
<table>

<tr>
<td>
<h1 class="pricing-title"  style ="color:red">Student name: </h1>{{$student ->student_name}}
</td>
</tr>
<br>
<br>
<tr>
<td>
<h1 class="pricing-title"  style ="color:red">Status : </h1>{{$student ->status}}
</td>
</tr>
<tr>
<td>
<h1 class="pricing-title"  style ="color:red">Email id : </h1>{{$student ->email_id}}
</td>
</tr>
<tr>
<td>
<h1 class="pricing-title"  style ="color:red">Address : </h1>{{$student ->address}}
</td>
</tr>
<tr>
<td>
<h1 class="pricing-title"  style ="color:red">Phone Number: </h1>{{$student ->phone_number}}
</td>
</tr>
<tr>
<td>
<h1 class="pricing-title"  style ="color:red">Course Id : </h1>{{$student ->course_id}}
</td>
</tr>
</body>
</html>

@endsection

  
