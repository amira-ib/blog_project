@extends('admin.layouts.master')

@section('content')
    <h4>Задний фон:</h4>
    <hr>
    <div class="row">
    <div class="col-md-12">
        <div id="btn-add-form-show">
            @include('admin.layouts.errors')
             <button class="btn btn-sm btn-info" id="add-form-show">Добавить</button>
        </div>
    </div>

    <div class="col-md-12">
        <div id="add-link-form">
            {!! Form::open(['route' => 'font.store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::file('link',null,['class' => 'form-control','required'])}}
                </div>
                <div class="form-group">
                    {!! Form::submit('Добавить',['class'=>'btn btn-sm btn-outline-success','id'=>'add-link']) !!}
                    <a href="{{route('font.index')}}" class="btn btn-sm btn-outline-danger" id="cancel">Отмена</a>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <br>
    @foreach($fonts as $font)
         <div class="col-md-3">
             <img src="/{{$font->link}}" style="width: 200px;height: 150px;" alt="Photo" >
             <button class="btn btn-sm btn-outline-success" style="margin-bottom: 20px">Сдлеать главной</button>
         </div>
      @endforeach
</div>

@endsection