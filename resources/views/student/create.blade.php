@extends('layout.master')

@section('body')
    <div class="col-md-9">


<h1>Create Student Record</h1>

        {!! Form::open(['url'=>'student','method'=>'post'])  !!}
        Name:<input type="text" name="name"><br>
        Class:<input type="text" name="class"><br>
        <input type="submit">
         {!! Form::close() !!}

    </div>
@endsection