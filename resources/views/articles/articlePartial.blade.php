<div class="form-group">
    {!!  Form::label('title', 'Title:') !!}
    {!!  Form::text('title', null, ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!!  Form::label('body', 'Body:') !!}
    {!!  Form::textarea('body', null, ['class'=>'form-control']) !!}

</div>
<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tagList', 'Tags:') !!}
    {!! Form::select('tagList[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
</div>
<div class="form-group">
    {!! Form::label('fileField', 'Upload File:') !!}
    {!! Form::file('fileField',['value' => $filename]) !!}
    {!! Form::label('fileField', 'Previous File:'.$filename) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['style' => 'width:300px', 'class' => 'btn btn-primary form-control'] ) !!}
</div>