<!-- Mainly scripts -->

<script src="{{asset('admin-assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('admin-assets')}}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{asset('admin-assets')}}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="{{asset('admin-assets')}}/js/library/library.js"></script>
<!-- jQuery UI -->
<script src="{{asset('admin-assets')}}/js/plugins/jquery-ui/jquery-ui.min.js"></script>
   @if (isset($config['js']))
        @foreach ($config['js'] as $key => $val)
             <script src="{{asset('admin-assets')}}/{{$val}}"></script>
        @endforeach
    @endif
