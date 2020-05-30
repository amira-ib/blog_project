<div class="form-group">
    {{Form::label('Категории:')}}<br>
    {{Form::select('section_list[]', $section_options, null, ['class'=> 'myselect form-control', 'multiple' => 'multiple'] ) }}
</div>

<div class="form-group">
    {{Form::label('title', 'Заголовок:')}}<br>
    {{Form::text('title',null,['class' => 'form-control','required'])}}
</div>

<div class="form-group">
    {{Form::label('description', 'Описание:')}}<br>
    {{Form::text('description',null,['class' => 'form-control','required'])}}
</div>

<div class="form-group">
    {{Form::label('content', 'Содержание статьи:')}}<br>
    {{Form::textarea('content',null,['class' => 'form-control','required','id'=>'bodyField'])}}
    @ckeditor('bodyField',['height' => 500])
</div>

<div class="form-group">
    {{Form::label('link', 'Фотография:')}}<br>
    {{Form::file('link',null,['class' => 'form-control','required'])}}
</div>



@push('script')
<script>
    $(document).ready(function() {
        $(".myselect").select2();
    });
</script>
@endpush