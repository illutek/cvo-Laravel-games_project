<div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publisher') !!}
        {!! Form::text('publisher', null, ['class'=>'form-control']) !!}
    </div>
<div class="checkbox">
    <label>
        {!! Form::checkbox('complete') !!} Completed?
    </label>
</div>
<div class="form-group">
    {!! Form::submit($btnText, ['class'=>'btn btn-primary']) !!}
</div>