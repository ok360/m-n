@extends('layout.master')

@section('body')
    <div class="col-md-9">


<h1>Edit Student Record</h1>

        {!! Form::model($student, ['route' => ['student.update', $student->id],'method'=>'put'])  !!}
         {!! Form::text('name') !!}
         {!! Form::text('class') !!}
            <input type="submit">
         {!! Form::close() !!}



    </div>
@endsection