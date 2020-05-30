@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom: 20px">
            Разделы:
            @foreach($article->sections as $section)
                <a href="{{route('section.show',[$section->id])}}" style="text-decoration: underline">{{ $section->name }}</a>
            @endforeach
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12">
            <img src="/images/{{$article->link}}" alt="{{$article->title}}" style="width:200px;height: 150px;margin-bottom: 20px">
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div style="border: 1px solid black;padding: 50px;margin-bottom: 50px">
                <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-info pull-right" data-toggle="tooltip" data-placement="top" title="Изменить" style="margin:-30px -30px">
                    <i class="fa fa-pencil"></i>
                </a>
                <h4 class="text-center">{{$article->title}}</h4>
                <p>{!! $article->content !!}</p>
            </div>

        </div>
    </div>
@endsection