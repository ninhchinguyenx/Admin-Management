
<!DOCTYPE html>
<html>

<head>
    @include('admin.dashboard.component.head');
</head>

<body>
    <div id="wrapper">
        {{-- SideBar Start  --}}
         @include('admin.dashboard.component.sidebar')
        {{-- SideBar End  --}}
         {{-- SideBar Start  --}}
         @include('admin.dashboard.component.nav')
        {{-- SideBar End  --}}
        @include($template)
        @include('admin.dashboard.component.footer')
        
    </div>
    @include('admin.dashboard.component.scripts')
</body>
</html>
