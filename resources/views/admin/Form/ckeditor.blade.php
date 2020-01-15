<!-- Basic text input -->
<?php
$tital= null;
?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset
<!-- Basic textarea -->
<div class="form-group">
    {!! Form::label($name, $tital, ['class' => 'control-label col-lg-3']) !!}
    <div class="col-lg-12">
        {!! Form::textarea($name, $value, ['class'=>'form-control ckeditor'], $attributes) !!}
        {{-- <textarea rows="5" cols="5" name="textarea" class="form-control " required="required" placeholder="Default textarea" aria-required="true"></textarea> --}}
    </div>
</div>
<!-- /basic textarea -->
