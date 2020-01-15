@extends('admin.layouts.app')

@section('content')
                {!! Form::open(['route' => 'admin.destination.store', 'files' => true , 'class' => 'form-horizontal form-validate-jquery' , 'novalidate'=>'novalidate']) !!}

<div class="container-detached">
    <div class="content-detached">

        <!-- Simple panel -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"><a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

                {{-- <form class="form-horizontal form-validate-jquery" action="#" novalidate="novalidate"> --}}
                    <fieldset class="content-group">
                        {{-- <legend class="text-bold">Basic inputs</legend> --}}

                            @foreach ($form as $key => $attributes )
                                {!! getInput($key , null, $attributes ) !!}
                            @endforeach
                            {{-- {{ Form::bsText('name') }}
                            {{ Form::ckeditor('description') }} --}}
                            {{-- {{random_code()}} --}}

                    </fieldset>


                    <div class="text-right">
                        <button type="reset" class="btn btn-default legitRipple" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                        <button type="submit" class="btn btn-primary legitRipple">Submit <i class="icon-arrow-left13 position-right"></i></button>
                    </div>


            </div>
        </div>
        <!-- /simple panel -->

    </div>
</div>


<div class="sidebar-detached affix-top" >
    <div class="sidebar sidebar-default">
        <div class="sidebar-content">

            <!-- Sidebar search -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Search</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content">
                    <form action="#">
                        <div class="has-feedback has-feedback-left">
                            <input type="search" class="form-control" placeholder="Search">
                            <div class="form-control-feedback">
                                <i class="icon-search4 text-size-base text-muted"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /sidebar search -->


            <!-- Sub navigation -->
            <div class="sidebar-category">
                <div class="category-title">
                    <span>Navigation</span>
                    <ul class="icons-list">
                        <li><a href="#" data-action="collapse"></a></li>
                    </ul>
                </div>

                <div class="category-content no-padding">
                    <ul class="navigation navigation-alt navigation-accordion">
                        <li class="navigation-header">Category title</li>
                        <li><a href="#" class="legitRipple"><i class="icon-googleplus5"></i> Link</a></li>
                        <li><a href="#" class="legitRipple"><i class="icon-googleplus5"></i> Another link</a></li>
                        <li><a href="#" class="legitRipple"><i class="icon-portfolio"></i> Link with label <span class="label bg-success-400">Online</span></a></li>
                        <li class="navigation-divider"></li>
                        <li>
                            <a href="#" class="has-ul legitRipple"><i class="icon-cog3"></i> Menu levels</a>
                            <ul class="hidden-ul">
                                <li><a href="#" class="legitRipple"><i class="icon-IE"></i> Second level</a></li>
                                <li>
                                    <a href="#" class="has-ul legitRipple"><i class="icon-firefox"></i> Second level with child</a>
                                    <ul class="hidden-ul">
                                        <li><a href="#" class="legitRipple"><i class="icon-android"></i> Third level</a></li>
                                        <li>
                                            <a href="#" class="has-ul legitRipple"><i class="icon-apple2"></i> Third level with child</a>
                                            <ul class="hidden-ul">
                                                <li><a href="#" class="legitRipple"><i class="icon-html5"></i> Fourth level</a></li>
                                                <li><a href="#" class="legitRipple"><i class="icon-css3"></i> Fourth level</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#" class="legitRipple"><i class="icon-windows"></i> Third level</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" class="legitRipple"><i class="icon-chrome"></i> Second level</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /sub navigation -->


            <!-- Form sample -->
                    <div class="text-right">
                        <button type="reset" class="btn btn-default legitRipple" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
                        <button type="submit" class="btn btn-primary legitRipple">Submit <i class="icon-arrow-left13 position-right"></i></button>
                    </div>

            <!-- /form sample -->

        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection
@section('script')

    <script type="text/javascript" src="{{ asset('admin/js/pages/form_validation.js')}}"></script>

@endsection
@section('js')

	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/validation/validate.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switch.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/dropzone.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/plugins/uploaders/plupload/plupload.queue.min.js')}}"></script>
    	<script type="text/javascript" src="{{ asset('admin/js/plugins/media/fancybox.min.js')}}"></script>


@endsection
