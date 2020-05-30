@extends('admin.layouts.master')

@section('content')
    <h4>Категории:</h4>
    <hr>
    <div class="form-group">
         <a href="{{route('section.create')}}" class="btn btn-sm btn-info">Создать</a>
    </div>
    @if(count($sections)>0)
    <div class="table-responsive">
        <table class="table table-hover table-sm">
            <thead>
            <tr>
                <th>Название</th>
                <th></th>
            </tr>
            </thead>
            @foreach($sections as $section)
                <tbody>
                <tr>
                    <td><a href="{{ route('section.show', $section->id) }}">{{$section->name}}</a></td>
                    <td>
                        <!-- Удаление -->
                        {!! Form::open(['route' => ['section.destroy',$section->id], 'method' => 'delete']) !!}
                        {{Form::button('<i class="fa fa-trash"></i>',['type'=>'submit','class'=>'btn btn-sm btn-danger pull-right','data-toggle'=>'tooltip', 'data-placement'=>'top', 'title'=>'Удалить'])}}
                        {!! Form::close() !!}
                        <!-- Изменение -->
                        <a href="{{ route('section.edit', $section->id) }}" class="btn btn-sm btn-info pull-right" data-toggle="tooltip" data-placement="top" title="Изменить" style="margin-right: 10px">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <!-- Добавление статьи -->
                        <a href="{{route('article.create')}}" class="btn btn-sm btn-info pull-right" data-toggle="tooltip" data-placement="top" title="Добавить статью" style="margin-right: 10px"><i class="fa fa-plus"></i></a>

                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    @endif
@endsection