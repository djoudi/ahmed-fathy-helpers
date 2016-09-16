<!DOCTYPE html>

<html lang="en" dir="rtl">

    <head>
        <meta charset="utf-8" />
        <title>{{ site('site_name',true) }} | {{ trans('lang.error404') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        {!! Html::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}

        {!! Html::style($cpanel.'css/style-'.getDir().'.css') !!}
       
        <link rel="shortcut icon" href="{{ $icon }}" /> </head>
    <!-- END HEAD -->
    <body class=" page-404-full-page">
        <div class="row">
            <div class="col-md-12 page-404">
                <div class="number font-red"> 404 </div>
                <div class="details">
                    <h3>{{ trans('lang.error404title') }}</h3>
                    <p> {{ trans('lang.error404content') }}
                        <br/>
                        <br/>
                        <a href="{{ url('/') }}" class="btn red btn-outline"> {{ trans('lang.return_home') }} </a>
                        <br> </p>
                    
                </div>
            </div>
        </div>
    </body>

</html>
