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
            <table class="table table-striped  table-togglable table-bordered table-json ">
                <thead class="thead-dark">
                    <tr>
                        @foreach ($inputs as $key => $attributes )
                            <th width="{{$attributes['width']}}">{{$attributes['tital']}}</th>
                        @endforeach
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="g-items" >
                @isset($value)
                    @foreach ($value as  $value_key=> $value)
                        <tr data-number="{{$value_key}}">
                            @foreach ($inputs as $key => $attributes )
                                <td >{!! getJsonInput($name , $key , $value[$key], $attributes ,$value_key) !!}</td>
                            @endforeach
                            <td><span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span></td>
                        </tr>
                    @endforeach
                @endisset
                <tr><td colspan="{{count($inputs) +1 }}"><span class="btn btn-info btn-sm btn-add-item"><i class="icon ion-ios-add-circle-outline"></i> {{__('Add item')}}</span></td></tr>
                </tbody>
                <tfoot class="g-more hide">
                        <tr data-number="__number__">
                            @foreach ($inputs as $key => $attributes )
                                <td >{!! getJsonInput($name , $key, null, $attributes ) !!}</td>
                            @endforeach
                            <td><span class="btn btn-danger btn-sm btn-remove-item"><i class="fa fa-trash"></i></span></td>
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
