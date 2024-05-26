<table class="table table-bordered mt20">
    <thead>
    <tr>
        <th>
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th style="width: 90px">Avatar</th>
        <th>Thông tin user</th>
        <th>Địa chỉ</th>
        <th class="text-center">Tình trạng</th>
        <th  class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @if (isset($users))
         @foreach ($users as $user)  
            <td><input type="checkbox" value="" class="input-checkbox checkBoxItem"></td>
            <td>
                <div class="image img-cover"><img src="https://anhcuoiviet.vn/wp-content/uploads/2022/11/avatar-dep-dang-yeu-nu-5.jpg" alt="">
                </div>
            </td>
            <td>
                <div class="info-item name"><strong>Họ và tên </strong>: {{$user->full_name}}</div>
                <div class="info-item email"><strong> Email</strong>: {{$user->email}}</div>
                <div class="info-item phone"><strong>Phone</strong>: {{$user->phone}}</div>
            </td>
            <td>
                <div class="address-item"><strong>Địa chỉ</strong>: {{$user->address}}</div>                
            </td>
            <td >
                <div class="flex-center"><input type="checkbox" class="js-switch_2" checked /></div>
            </td>
            <td >
                <div class="flex-center"><a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </div>
            </td>
        </tr>
     @endforeach  
    @endif
    </tbody>
</table>

 <div class="text-center">{{ $users->links('pagination::bootstrap-4') }}</div>