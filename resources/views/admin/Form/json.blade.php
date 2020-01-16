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
    {!! Form::label($name,$tital, ['class' => 'control-label col-lg-3']) !!}
    <div class="col-lg-12">
        {{-- {{ Form::text($name, $value, array_merge(['class' => 'form-control' ,'required' => 'required'], $attributes)) }} --}}
        <table class="table table-striped table-bordered table-{{$modal_id}}">
            <thead class="thead-dark">
                <tr>
                    @foreach ($inputs as $key => $attributes )
                        <th width="{{$attributes['width']}}">{{$attributes['tital']}}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($inputs as $key => $attributes )
                        <td >{!! getInput($key , null, $attributes ) !!}</td>
                    @endforeach
                </tr>
            </tbody>
            <tfoot>
                <tr>
                <td><button type="button" class="btn btn-info add-row-{{$modal_id}}" table-id="{{$modal_id}}">ADD</button></td>
                <td></td>
                </tr>
            </tfoot>
        </table>
        @error($name)
            <label id="{{$name}}-error" class="validation-error-label" for="{{$name}}">{{ $message }}</label>
        @enderror
    </div>
</div>

<!-- /basic text input -->
@push('script')

<script>
// Allow CSS transitions when page is loaded

// $(window).on("load", function() {
//     table_{{$modal_id}}  = $(".table-{{$modal_id}}").find("tbody").find('tr:first').html();
//     console.log(table_{{$modal_id}});
// });
var i = 0 ;
$(document).on("click",".add-row-{{$modal_id}}",function() {
    var table_{{$modal_id}} = `<tr>
        @foreach ($inputs as $key => $attributes )
                        <td >{!! getInput($key , null, $attributes ) !!}</td>
        @endforeach
    </tr>`;
    $(this).parent().parent().parent().siblings('tbody').append(table_{{$modal_id}});
    // $('.ckeditor').ckeditor();
    CKEDITOR.replace( 'ckeditor-'+i );

    i++
});

</script>
@endpush
