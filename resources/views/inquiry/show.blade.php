@extends('layouts.master')
@section('content')
<html>
<head>
</head>
<body>
<table>

 <tr>
 <td>
 <h1 >Source : </h1>{{ $inquiry->source}}
</td>
</tr>
<br>
<br>
<tr>
 <td>
 <h1>Type : </h1>{{ $inquiry->type}}
</td>
</tr>
<tr>
 <td>
 <h1>Description : </h1>{{ $inquiry->description}}
</td>
</tr>
<tr>
 <td>
 <h1 >Staff ID : </h1>{{ $inquiry->staff_id}}
</td>
<tr>
 <td>
 <h1 >Student Id : </h1>{{ $inquiry->student_id}}
</td>
<tr>
 <td>
 <h1 >Date Time : </h1>{{ $inquiry->date_time}}
</td>
</tr>
</table>
</body>
</html>
@endsection

  
