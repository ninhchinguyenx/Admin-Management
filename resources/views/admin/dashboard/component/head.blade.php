<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>INSPINIA | Dashboard v.4</title>

<link href="{{asset('admin-assets')}}/css/bootstrap.min.css" rel="stylesheet">
<link href="{{asset('admin-assets')}}/font-awesome/css/font-awesome.css" rel="stylesheet">

<!-- Morris -->
<link href="{{asset('admin-assets')}}/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
@if (isset($config['css']))
@foreach ($config['css'] as $key => $val)
     <link href="{{asset('admin-assets')}}/{{$val}}" rel="stylesheet">
@endforeach
@endif
<link href="{{asset('admin-assets')}}/css/animate.css" rel="stylesheet">
<link href="{{asset('admin-assets')}}/css/style.css" rel="stylesheet">
<link href="{{asset('admin-assets')}}/css/customize.css" rel="stylesheet">

<script src="{{asset('admin-assets')}}/js/jquery-3.1.1.min.js"></link>