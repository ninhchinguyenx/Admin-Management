<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>{{config('apps.user.title')}}</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{route('dashboard.index')}}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{config('apps.user.title')}}</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">
      
    </div>
</div>
<div class="row" style="margin-top: 20px">
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>{{config('apps.user.tableHeading')}}</h5>
            @include('admin.dashboard.pages.user.component.tookbox')
        </div>
        <div class="ibox-content">
           @include('admin.dashboard.pages.user.component.filter')
           @include('admin.dashboard.pages.user.component.table')   
        </div>
    </div>
</div>
</div>
