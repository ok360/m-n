@extends('layout.master')

@section('body')
    <div class="col-md-9">


<h1>Create Student Record</h1>
        <form action="{{url ('student')}}" method="post">
            {{csrf_field ()}}
            Name:<input type="text" name="name"><br>
            Class:<input type="text" name="class"><br>
            <input type="submit">
        </form>
    </div>
@endsection