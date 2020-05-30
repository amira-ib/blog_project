@extends('admin.layouts.master')

@section('content')
    <h4>Новая статья:</h4>
    <hr>
    @include('admin.layouts.errors')


    {!! Form::open(['route' => 'article.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        @include('admin.articles._form')
        @include('admin.articles._buttons',['button_text'=>'Добавить','cancel'=>'Cancel'])

    {!! Form::close() !!}
@endsection