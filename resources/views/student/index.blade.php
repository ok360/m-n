@extends('layout.master')

@section('body')
    <div class="col-md-9">


<h1>Student Record</h1>
        <a href="{{url('student/create')}}">Create</a>
          @if(session ('success'))
            <div class="alert alert-success">
            <p>{{session ('success')}}</p>
            </div>
            @endif
<table class="table table-responsive">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Action</th>
    </tr>
    @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->class}}</td>
            <td>
                {!! Form::open(['url'=>['student/'.$student->id],'method'=>'delete']) !!}
                <a href="{{url('student/'.$student->id.'/edit')}}" class="btn btn-info">Edit</a>
                {!! Form::submit('Delete') !!}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
    </div>
@endsection