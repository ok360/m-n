@extends('layout.master')


@section('body')
    <h1>Students Record with suject</h1>

    @foreach($students as $student)
        <h3>{{$student->name}}</h3>
        @if($student->nic)
        <h4>Nic {{$student->nic->nic_no}}</h4>
        @endif
        @forelse($student->subjects as $subject)
            <p>{{$subject->name}}</p>
            @empty
            <p>No record found</p>

            @endforelse
    @endforeach
    @endsection