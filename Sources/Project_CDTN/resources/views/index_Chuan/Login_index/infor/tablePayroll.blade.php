<div style="padding: 20px 0px 20px 0px;">
@if($user->teacher->coefficients_salary)
        <table class="table table-bordered">
                <thead>
                        <tr>
                                <th scope="col">Mã Số</th>
                                <th scope="col">Họ Tên</th>
                                <th scope="col">Phòng Ban</th>
                                <th scope="col">Hệ Số Lương</th>
                                <th scope="col">Hệ Số Chức Vụ</th>
                                <th scope="col">Lương Cơ Bản</th>
                                <th scope="col">Tiền Lương</th>
                                <th scope="col">Tiền Thưởng</th>
                                <th scope="col">Tổng Lương</th>
                                <th scope="col">BHXH</th>
                                <th scope="col">BHYT</th>
                                <th scope="col">Thuế Thu Nhập Cá Nhân</th>
                                <th scope="col">Thực Lĩnh</th>
                        </tr>
                </thead>
                <tbody>
                        <tr>
                                <th scope="row">{{ $user->teacher->teacher_code }}</th>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->teacher->department }}</td>
                                <td>{{ number_format($user->teacher->coefficients_salary) }}</td>
                                <td>{{ number_format($user->teacher->position_coefficient) }}</td>
                                <td>{{ number_format($user->teacher->basic_salary) }}</td>
                                <td>{{ number_format($user->teacher->salary) }}</td>
                                <td>{{ number_format($user->teacher->bonus) }}</td>
                                <td>{{ 
                                        number_format(
                                                $user->teacher->salary + 
                                                $user->teacher->bonus
                                        )
                                }}</td>
                                <td>{{ number_format($user->teacher->social_insurance) }}</td>
                                <td>{{ number_format($user->teacher->health_insurance) }}</td>
                                <td>{{ number_format($user->teacher->personal_income_tax) }}</td>
                                <td>{{ 
                                        number_format(
                                                $user->teacher->salary + 
                                                $user->teacher->bonus - 
                                                $user->teacher->social_insurance -
                                                $user->teacher->health_insurance -
                                                $user->teacher->personal_income_tax
                                        )
                                }}</td>
                        </tr>
                </tbody>
        </table>
@else
        <div style="width: 100%; text-align: center">Chưa có dữ liệu lương!</div>
@endif
</div>
