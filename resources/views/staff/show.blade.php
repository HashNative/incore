@extends('layouts.master')
@section('content')
<table>

 <tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Lecturer Name : </h1>{{$staff -> staff_id}}
</td>
</tr>
<br>
<br>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Lecturer Name : </h1>{{$staff -> staff_name}}
</td>
</tr>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Lecturer Name : </h1>{{$staff -> languages}}
</td>
</tr>
<tr>
 <td>
 <h1 class="pricing-title"  style ="color:red">Lecturer Name : </h1>{{$staff -> mobile_number}}
</td>
</tr>

@endsection

  
