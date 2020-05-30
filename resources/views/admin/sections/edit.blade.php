@extends('admin.layouts.master')

@section('content')
    <h4>Изменить раздел:</h4>
    <hr>
    {!! Form::model($sections,['route' => ['section.update',$sections->id], 'method' => 'put']) !!}
    @include('admin.sections._form')
    @include('admin.sections._buttons',['button_article'=>'Изменить'])
    {!! Form::close() !!}
@endsection