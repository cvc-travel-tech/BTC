<!-- Basic text input -->
<?php
$tital= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset
<div class="form-group">
    {!! Form::label($name,$tital, ['class' => 'control-label col-lg-3']) !!}
    {{-- <label class="control-label col-lg-3">Name<span class="text-danger">*</span></label> --}}
    <div class="col-lg-9">
        {{ Form::text($name, $value, array_merge(['class' => 'form-control' ,'required' => 'required'], $attributes)) }}
        {{-- <input type="text" name="basic" class="form-control" required="required" placeholder="Text input validation" aria-required="true" aria-invalid="true"> --}}
    </div>
</div>
        {{-- dd($attributes); --}}

<!-- /basic text input -->
