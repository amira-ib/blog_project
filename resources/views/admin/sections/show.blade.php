@extends('admin.layouts.master')

@section('content')
    <h4>Статьи по категории "{{$section->name}}"</h4>
    <hr>
    <div class="form-group">
        <a href="{{route('article.create')}}" class="btn btn-sm btn-info"><i class="fa fa-plus"> Добавить статью</i></a>
    </div>
    @if (count($section->articles)>0)
        <div class="table-responsive">
            <table class="table table-hover table-sm">
                <thead>
                <tr>
                    <th>Заголовок</th>
                    <th>Краткое описание</th>
                    <th>Дата создания</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                @foreach($section->articles as $article)
                    <tbody>
                    <tr>
                        <td><a href="{{route('article.show',[$article->id])}}">{{$article->title}}</a></td>
                        <td>{{$article->description}}</td>
                        <td>{{$article->created_at->diffForHumans()}}</td>
                        <td>
                            {{--Изменение--}}
                            <a href="{{ route('article.edit', $article->id) }}" class="btn btn-sm btn-info pull-left" data-toggle="tooltip" data-placement="top" title="Изменить" style="margin-right: 10px">
                                <i class="fa fa-pencil"></i>
                            </a>
                            {{--Удаление--}}
                            {!! Form::open(['route' => ['article.destroy',$article->id], 'method' => 'delete']) !!}
                            {{Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-sm btn-danger','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Удалить'])}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    </tbody>
                @endforeach
            </table>
        </div>

    @endif


@endsection