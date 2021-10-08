<div class="col-lg-7" style="padding: 20px 20px;">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <p><span>Họ Tên:&nbsp;&nbsp;</span>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
        </div>
        <div class="form-group">
            <p><span>Email:&nbsp;&nbsp;</span>{{ auth()->user()->email }}</p>
        </div>
        <div class="form-group">
            <p><span>Địa chỉ:&nbsp;&nbsp;</span>{{ auth()->user()->address }}</p>
        </div>
        <div class="form-group">
            <p><span>Số điện thoại: &nbsp;&nbsp;</span>{{ auth()->user()->phone_number }}</p>
        </div>
        <div class="form-group">
            {{-- date_format($date, "d/m/Y"); --}}
            <p><span>Ngày sinh: &nbsp;&nbsp;</span>{{ auth()->user()->date_birth }}</p>
        </div>
</div>
