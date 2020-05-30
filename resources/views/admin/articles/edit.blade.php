@extends('admin.layouts.master')

@section('content')
    <h4>Изменить статью:</h4>
    <hr>
    @include('admin.layouts.errors')

    {!! Form::model($article,['route' => ['article.update',$article->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
         @include('admin.articles._form')
         @include('admin.articles._buttons', ['button_text' => 'Изменить','cancel'=>'Cancel'])
    {!! Form::close() !!}
@endsection