@extends('layouts.master')
@section('title')
Danh sách User
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h2 class="m-0">Danh sách</h2>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Avata</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Phân quyền</th>
                                <th>Creater at</th>
                                <th>Update at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        <?= $user['id'] ?>
                                    </td>
                                    <td>
                                        <?= $user['name'] ?>
                                    </td>
                                    <td>
                                        <img src="{{ asset($user['avatar']) }}" alt="Ảnh người dùng" width="80px">
                                    </td>
                                    <td>
                                        <?= $user['email'] ?>
                                    </td>
                                    <td>
                                        <?= $user['password'] ?>
                                    </td>
                                    <td>
                                        @if ($user['role'] == '1')
                                            Quản trị viên
                                        @else
                                            Người dùng
                                        @endif
                                    </td>
                                    <td>
                                        <?= $user['created_at'] ?>
                                    </td>
                                    <td>
                                        <?= $user['updated_at'] ?>
                                    </td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('admin/users/' . $user['id'] . '/delete') }}"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                            Xóa
                                        </a>
                                        <a class="btn btn-warning" href="{{ url('admin/users/' . $user['id'] . '/show') }}">
                                            Xem
                                        </a>
                                        <a class="btn btn-primary" href="{{ url('admin/users/' . $user['id']) . '/edit' }}">
                                            Sửa
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection