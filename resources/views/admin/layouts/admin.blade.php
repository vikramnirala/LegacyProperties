@extends('admin.layouts.app')

@section('body_class','nav-md')

@section('page')
<!-- MAIN WRAPPER -->
<div id="wrapper">
    
    @include('admin.sections.left-sidebar')
    
    
    <!-- BEGIN PAGE WRAPPER -->
    <div id="page-wrapper" class="gray-bg">
        @include('admin.sections.header')
    <!-- BEGIN MAIN CONTENT -->	
    <div class="wrapper wrapper-content container ">
        <div class="m-l-15 m-b-40 ">
            
                @yield('content')
            
                <!-- FOOTER -------->
                <div class="footer">
                    <div class="text-center">Legacy Property Management &copy;2017</div>
                </div>
                <!-- END FOOTER ---->

        </div>
        <!-- /CONTENT ROW -->
    </div>
        <!-- /CONTENT WRAPPER -->

        <!-- BEGIN USER CHAT -->
        <!-- INTEGRATE INTERCOM CHAT FEATURE HERE -->
        <div id="small-chat">
            <span class="badge badge-warning pull-right">5</span>
            <a class="open-small-chat">
                <i class="fa fa-comments"></i>
            </a>
        </div>
        <!-- END CHAT FEATURE -->
        

    </div>
    <!-- END PAGE WRAPPER -->
    </div>
    
</div>
<!-- END MAIN WRAPPER -->
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/assets/custom/app.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/custom/fusion.css') }}">
@endsection

@section('scripts')
    {{ Html::script('public/assets/admin/js/admin.js') }}
@endsection