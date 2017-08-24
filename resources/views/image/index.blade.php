@extends('layout.master')


@section('body')
<h1>Image Crud</h1>
{{--<form action="{{url ('image')}}" method="post" enctype="multipart/form-data">--}}
    {{--{{csrf_field ()}}--}}
    {{--<input type="file" name="image">--}}
    {{--<input type="submit">--}}
{{--</form>--}}

    {!! Form::open(['url'=>'image','method'=>'post','enctype'=>'multipart/form-data']) !!}
{!! Form::file('image') !!}
{!! Form::submit('save') !!}
    {!! Form::close() !!}
    @foreach($images as $image)
    <img src="{{asset ('images',$image->name)}}" alt="">
    @endforeach
@endsection