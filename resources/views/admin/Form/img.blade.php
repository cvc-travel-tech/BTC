<!-- Basic text input -->
<?php
$tital= null;
$modal_id = random_code();

?>
@isset($attributes['tital'])
<?php
$tital= $attributes['tital'];
?>
@endisset
<div class="form-group">
    <div class="col-lg-12">

        <!-- User thumbnail -->
        <div class="thumbnail">
                <div class="thumb  thumb-slide" div-id="{{$modal_id}}">
                    <img src="{{ asset('admin/images/cover.jpg')}}" alt="">
                    <div class="caption">
                        <span>
                            <button type="button" class="btn bg-success-400 btn-icon btn-xs legitRipple single-img{{$modal_id}}" img-id="{{$modal_id}}"  ><i class="icon-plus2"></i></button>
                        </span>
                    </div>
                    <input type="hidden" name="{{$name}}" id="input-{{$modal_id}}">
                </div>
            </div>
            <!-- /user thumbnail -->



        </div>

</div>

<!-- /basic text input -->


<!-- Iconified modal -->
    <div id="single-img-{{$modal_id}}" class="modal fade " modal-id="{{$modal_id}}" >
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="file-uploader-{{$modal_id}}"><p>Your browser doesn't have Flash installed.</p></div>
                    <h5 class="modal-title"><i class="icon-menu7"></i> &nbsp;Modal with icons</h5>
                </div>
                <div class="modal-body">
                    <div class="row get-images get-images-{{$modal_id}}">

					</div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-link" data-dismiss="modal"><i class="icon-cross"></i> Close</button>
                    <button class="btn btn-primary save-images-input{{$modal_id}}" type="button" ><i class="icon-check"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /iconified modal -->
@push('script')

<script>
$(".file-uploader-{{$modal_id}}").pluploadQueue({
    runtimes: "html5, html4, Flash, Silverlight",
    url: "{{route('admin.media.store')}}",
    chunk_size: "15000Kb",
    unique_names: true,
    multiple_queues : true,
    refresh : true,
    filters: {
        max_file_size: "10000Kb",
        mime_types: [
            {
                title: "Image files",
                extensions: "jpg,gif,png"
            }
        ]
    },

    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
});
var uploader{{$modal_id}} = $('.file-uploader-{{$modal_id}}').pluploadQueue();

uploader{{$modal_id}}.bind('FileUploaded', function() {
    if (uploader{{$modal_id}}.files.length == (uploader{{$modal_id}}.total.uploaded + uploader{{$modal_id}}.total.failed)) {
        $.ajax({
           type:'GET',
           url:'{{route('admin.media.getImages')}}',
           success:function(data){
              console.log(data);
              getImages{{$modal_id}}(data);
           },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    }
});
$.ajax({
    type:'GET',
    url:'{{route('admin.media.getImages')}}',
    success:function(data){
        console.log(data);
        getImages{{$modal_id}}(data);
    },
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });
function getImages{{$modal_id}}(data){
  //some code
    $('.get-images-{{$modal_id}}').html('');
    for(var i=0;i<data.length;i++) {
        $('.get-images-{{$modal_id}}').append(`
            <div class="col-lg-1 col-sm-3 ">
                <div class="thumbnail ">
                    <div class="thumb single-img">
                        <img src="{{ asset('storage/tmp/uploads/thumb')}}/${data[i].file_path}" img-src="{{ asset('storage/tmp/uploads/large')}}/${data[i].file_path}"" img-id="${data[i].id}" input-id="{{$modal_id}}" class=""  alt="">
                        <div class="caption-overflow ">
                            <span class="">
                                <a href="{{ asset('storage/tmp/uploads')}}/${data[i].file_path}" img-id="${data[i].id}" data-popup="lightbox" rel="gallery" class="btn border-white text-white btn-flat btn-icon btn-rounded legitRipple"><i class="icon-plus3"></i></a>
                                <button type="button"  role="button"class="btn border-white text-white btn-flat btn-icon btn-rounded ml-5 legitRipple img-file-up-{{$modal_id}} " ><i class="icon-link2"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        `);
    }
}
$(document).on("click",".img-file-up-{{$modal_id}}",function() {
    if($(this).parent().parent().parent().hasClass('single-img')){
        for (let index = 0; index < $('img.selected').length; index++) {
            const element = $('img.selected')[index];
            $(element).removeClass('selected');
        }
    }


    if($(this).parent().parent().siblings('img').hasClass('selected')) {
        console.log($(this).parent().parent().siblings('img'));
        $(this).parent().parent().siblings('img').removeClass('selected');
    }
    else {
        $(this).parent().parent().siblings('img').addClass('selected');
    }
    // console.log($(this).parent().parent().siblings('img') , $('img.selected'));

});

$(".single-img{{$modal_id}}").click(function() {
    // alert("Handler for .click() called.");
    $("#single-img-"+$(this).attr('img-id')).modal("toggle");
});
// Defaults
// Defaults
$('.save-images-input{{$modal_id}}').click(function() {

    for (let index = 0; index < $('img.selected').length; index++) {
        const element = $('img.selected')[index];
        var myDiv = $('div[div-id="' + $(element).attr('input-id') + '"]');
        myDiv.find( "img" ).attr("src",$(element).attr('img-src'));
        myDiv.find( "#input-{{$modal_id}}" ).val($(element).attr('img-id'));
        $(element).removeClass('selected');
    }
    $("#single-img-"+{{$modal_id}}).modal("hide");
});
</script>
@endpush
