@extends('layouts.master')
@section('content')
<html>
<head>
</head>
<body>
<table>

 <tr>
 <td>
 <h1  >Staff Id : </h1>{{$staff->staff_id}}
</td>
</tr>
<br>
<br>
<tr>
 <td>
 <h1 >Staff Name : </h1>{{$staff->staff_name}}
</td>
</tr>
<tr>
 <td>
 <h1 >Languages : </h1>{{$staff->languages}}
</td>
</tr>
<tr>
 <td>
 <h1 >Mobile  Number : </h1>{{$staff->mobile_number}}
</td>
</tr>
</table>
</body>
</html>
@endsection

  
