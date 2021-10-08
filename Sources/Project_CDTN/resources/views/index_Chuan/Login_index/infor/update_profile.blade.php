<div class="col-lg-7" style="padding: 20px 20px; ">
    <form action="{{route('postProfile',auth()->user()->id)}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <label>Họ</label>
            <input class="form-control " name="first_name" placeholder="" value="{{ auth()->user()->first_name }}" />
        </div>
        <div class="form-group">
            <label>Tên</label>
            <input class="form-control " name="last_name" placeholder="" value="{{ auth()->user()->last_name }}" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control " type="Email" name="email" placeholder="" value="{{ auth()->user()->email }}"
                readonly />
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input class="form-control " name="address" placeholder="" value="{{ auth()->user()->address }}" />
        </div>
        <div class="form-group">
            <label>Số Điện Thoại</label>
            <input class="form-control " name="phone_number" placeholder=""
                value="{{ auth()->user()->phone_number }}" />
        </div>
        <div class="form-group">
            <label>Ngày Sinh</label>
            <input class="form-control " name="date_birth" type="date" placeholder="" value="{{ auth()->user()->date_birth }}" />
        </div>
        <button type="submit" class="btn btn-info">Sửa</button>
        <button type="reset" class="btn btn-secondary">Đặt Lại</button>
    <form>
</div>
