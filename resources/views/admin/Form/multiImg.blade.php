<!-- Basic text input -->
<?php
$tital= null;
$width= 12;
$modal_id = random_code();

?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
$width= $attributes['width'];
?>
@endisset

<div class="form-group">
    <div class="col-lg-{{$width}}">
        <div class="text-center mb-10">
            <button type="button" class="btn btn-info image-gallery" gallery-id="{{$modal_id}}" >Add Image</button>
        </div>
        <!-- /basic text input -->
        <div class="dungdt-upload-multiple" gallery-id="{{$modal_id}}" input-name="{{$name}}">

        </div>
        <!-- /user thumbnail -->
    </div>
</div>


@push('script')

<script>

</script>
@endpush
