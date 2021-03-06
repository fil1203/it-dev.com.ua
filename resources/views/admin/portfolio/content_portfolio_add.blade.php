<div id="page-wrapper" style="padding: 20px;">

    {!! Form::open(['url'=>route('portfolioAdd'), 'class'=>'form-horisontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}

    <div class="form-group col-xs-8">
        {!! Form::label('name','Название', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Введите название проекта'])!!}
        </div>
    </div>
    <br>
    <br>
    <div class="form-group col-xs-8">
        {!! Form::label('text','Текст', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::textarea('text', old('text'), ['id'=>'editor','class'=>'form-control', 'placeholder'=>'Введите текст проекта'])!!}
        </div>
    </div>
    <br>


    <div class="form-group col-xs-8">
        {!! Form::label('alais','Алиас', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('alias', old('alias'), ['class'=>'form-control', 'placeholder'=>'Введите alias проекта'])!!}
        </div>
    </div>
    <br>

    <div class="form-group col-xs-8">
        {!! Form::label('filter','Фильтр', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::text('filter', old('filter'), ['class'=>'form-control', 'placeholder'=>'Введите фильтр проекта'])!!}
        </div>
    </div>
    <br>
        <div class="form-group col-xs-8">
        {!! Form::label('img','Картинка', ['class'=> 'col-xs-2 control-label']) !!}
        <div class="col-xs-10">
            {!! Form::file('img',  ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение','data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файла нет'])!!}
        </div>
    </div>


    <div class="form-group col-xs-8">

        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class'=>'btn btn-primary', 'type'=>'submit'])!!}
        </div>
    </div>


    {!! Form::close() !!}

    <script >
        CKEDITOR.replace('editor');
    </script>


</div>