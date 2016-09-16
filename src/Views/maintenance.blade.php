<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ app()->getLocale() }}" dir="{{ getDir() }}">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>{{ trans('lang.site_maintenance') }} | {{ site('site_name') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}

        {!! Html::style($cpanel.'css/style-'.getDir().'.css') !!}
        
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ $icon }}" /> </head>
    <!-- END HEAD -->

    <body class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 coming-soon-header">
                    <a class="brand" href="index.html">
                        <img src="{{ $logo }}" alt="logo" /> </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 coming-soon-content">
                    <h1>{{ trans('lang.site_maintenance_sorry') }}</h1>
                    <p> {{trans('lang.site_maintenance_msg')}}</p>
                    <br>
                    <ul class="social-icons margin-top-20">
                        <li>
                            <a href="{{ site('facebook') }}" target="_blank" data-original-title="Facebook" class="facebook"> </a>
                        </li>
                        <li>
                            <a href="{{ site('twitter') }}" data-original-title="Twitter" target="_blank" class="twitter"> </a>
                        </li>
                        <li>
                            <a href="{{ site('google_plus') }}" data-original-title="Google Plus" target="_blank" class="googleplus"> </a>
                        </li>
                        <li>
                            <a href="{{ site('linkedin') }}" data-original-title="Linkedin" target="_blank" class="linkedin"> </a>
                        </li>

                    </ul>
                </div>

            </div>
            <!--/end row-->
            <div class="row">
                <div class="col-md-12 coming-soon-footer">{{ site('copyright') }} 

 &nbsp;
                 @if(app()->getLocale() == 'en')
                    <a href="{{ url('lang/ar') }}" class="font-white">
                        <img alt="" src="{{ $cpanel }}img/flags/sa.png">
                        <span class="langname"> العربية </span>
                    </a>
                    @elseif(app()->getLocale() == 'ar')
                    <a href="{{ url('lang/en') }}" class="font-white">
                        <img alt="" src="{{ $cpanel }}img/flags/us.png">
                        <span class="langname"> English </span>
                    </a>
                @endif


                </div>

            </div>
        </div>
   
        {!! Html::script($cpanel.'/js/script.js') !!}
        <script>
var ComingSoon = function () {

    return {
        //main function to initiate the module
        init: function () {
          
            $.backstretch([
                    "{{ $cpanel }}img/bg/1.jpg",
                    "{{ $cpanel }}img/bg/2.jpg",
                    "{{ $cpanel }}img/bg/3.jpg",
                    "{{ $cpanel }}img/bg/4.jpg"
                ], {
                fade: 1000,
                duration: 10000
           });
        }

    };

}();

jQuery(document).ready(function() {    
   ComingSoon.init(); 
});
        </script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>
