@extends('admin.layouts.master')

@section('content')
    @include('admin.layouts.errors')
    <h4>Разделы:</h4>
    <hr>
    {!! Form::open(['route' => 'section.store', 'method' => 'post']) !!}
    @include('admin.sections._form')
    @include('admin.sections._buttons',['button_article'=>'Добавить'])
    {!! Form::close() !!}
@endsection
