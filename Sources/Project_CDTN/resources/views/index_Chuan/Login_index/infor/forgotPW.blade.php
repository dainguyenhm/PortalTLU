<div class="col-md-7" style="padding: 20px 20px;">
 <div class="form-group">
            {{-- <input type="checkbox" id="changePassword" name="changePassword"> --}}
            <label>Thay đổi mật khẩu</label>
            <input class="form-control password" name="Password" placeholder="Nhập Mật khẩu....." type="password" style="with:300px"/>
        </div>
        <div class="form-group">
            <label>Nhập lại mật khẩu</label>
            <input class="form-control password" name="PasswordAgain" placeholder="Nhập lại Mật khẩu....." type="password" width="300px"/>
        </div> 
         {{-- <div class="form-group">
            <label>Phân quyền người dùng</label>
            <label class="radio-inline">
                <input name="Quyen" value="1" @if ($user->Quyen == 1)
                {{ 'checked' }}
                @endif
                type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="Quyen" value="0" @if ($user->Quyen == 0)
                {{ 'checked' }}
                @endif
                type="radio">Người dùng
            </label>
        </div>  --}}
        <button type="submit" class="btn btn-info">Sửa</button>
        <button type="reset" class="btn btn-secondary">Đặt Lại</button>
    </div>
</div>