<div class="filter">
    <div class="prepage uk-flex uk-flex-between">
        <div class="uk-flex uk-flex-between items-center">
            <select name="prepage" id="" class="form-control input-sm  filter mr10">
            @for ($i = 20; $i <= 200; $i++)
                <option value="{{$i}}">{{$i}}</option>
            @endfor
            </select>
         </div>
         <div class="action uk-flex">
            <div class="uk-flex items-center mr10">
                <select name="user_catelogue_id" id="" class="form-control">
                    <option value="0">Chọn nhóm thành viên</option>
                    <option value="0">Quản trị viên</option>
                </select>
             </div>
            <div class="uk-flex uk-search  items-center mr10">
                <div class="input-group">
                    <input type="text" name="keyword" value="" placeholder="Nhập từ khoá bạn muốn tìm kiếm..." class="form-control">
                    <div class="input-group-btn">
                        <button type="submit" name="search" value="search" class="btn btn-primary mb0 btn-sm"><i class="fa fa-search"></i> Tìm kiếm</button>
                    </div>
                </div>
            </div>
            <div class="uk-flex uk-flex-center">
                <a href="" class="btn btn-danger btn-sm mb0"><i class="fa fa-plus"></i> Thêm mới</a>
            </div>
         </div>
    </div>
</div>