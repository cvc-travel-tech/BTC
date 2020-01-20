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
{{-- <div class="form-group">
<div class="col-lg-{{$width}}">

        <!-- User thumbnail -->
        <div class="thumbnail">
                <div class="thumb thumb-slide" div-id="{{$modal_id}}">
        <div class="col-lg-1 col-md-2 col-xs-3 ">
                        <div class="thumbnail ">
                            <div class="thumb single-img ">
                                <img src="{{ asset('admin/images/cover.jpg')}}" img-src="{{ asset('storage/tmp/uploads/large')}}/${data[i].file_path}"" img-id="${data[i].id}" input-id="${img_id}" class=""  alt="">
                                <div class="caption-overflow ">
                                    <span class="">
                                        <a href="{{ asset('storage/tmp/uploads')}}/${data[i].file_path}" img-id="${data[i].id}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded legitRipple"><i class="icon-plus3"></i></a>
                                        <button type="button"  role="button"class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 legitRipple img-file-up " ><i class="icon-link2"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-1 col-md-2 col-xs-3 ">
                        <div class="thumbnail ">
                            <div class="thumb single-img ">
                                <img src="{{ asset('admin/images/cover.jpg')}}" img-src="{{ asset('storage/tmp/uploads/large')}}/${data[i].file_path}"" img-id="${data[i].id}" input-id="${img_id}" class=""  alt="">
                                <div class="caption-overflow ">
                                    <span class="">
                                        <a href="{{ asset('storage/tmp/uploads')}}/${data[i].file_path}" img-id="${data[i].id}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded legitRipple"><i class="icon-plus3"></i></a>
                                        <button type="button"  role="button"class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 legitRipple img-file-up " ><i class="icon-link2"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-1 col-md-2 col-xs-3 ">
                        <div class="thumbnail ">
                            <div class="thumb single-img ">
                                <img src="{{ asset('admin/images/cover.jpg')}}" img-src="{{ asset('storage/tmp/uploads/large')}}/${data[i].file_path}"" img-id="${data[i].id}" input-id="${img_id}" class=""  alt="">
                                <div class="caption-overflow ">
                                    <span class="">
                                        <a href="{{ asset('storage/tmp/uploads')}}/${data[i].file_path}" img-id="${data[i].id}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded legitRipple"><i class="icon-plus3"></i></a>
                                        <button type="button"  role="button"class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 legitRipple img-file-up " ><i class="icon-link2"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <span>
                            <button type="button" class="btn bg-success-400 btn-icon btn-xs legitRipple select-img" img-id="{{$modal_id}}"  ><i class="icon-plus2"></i></button>
                        </span>
                    </div>
                    <input type="hidden" name="{{$name}}" value="{{$value}}" id="input-{{$modal_id}}">
                </div>
                <div class="caption text-center">

                    <h2 class="no-margin">{{$tital}}</h2>
                    @error($name)
                        <label id="{{$name}}-error" class="validation-error-label" for="{{$name}}">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <!-- /user thumbnail -->
        </div>
</div> --}}
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
</div>


@push('script')

<script>

</script>
@endpush
