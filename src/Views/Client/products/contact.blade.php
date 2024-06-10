@extends('layouts.master1')
@section('content')
<div class="row m-3">
    

    <div class="col-4">
        <h2 class="h5 section-title p-3">Liên hệ</h2>
        <form action="">
            <label for="">Địa chỉ chúng tôi</label>
            <input type="text" class=" form-control " disabled placeholder="17 Trịnh Văn Bô-Nam Từ Liêm-Hà Nội">
            <label for="">Email chúng tôi</label>
            <input type="text" class=" form-control " disabled placeholder="dynbag@gamil.com">
            <label for="">Điện thoại</label>
            <input type="text" class=" form-control " disabled placeholder="0338013703">
            <label for="">Thời gian làm việc</label>
            <input type="text" class=" form-control " disabled placeholder="Thứ 2 đến Thứ 6 từ 8h30 đến 17h30">



        </form>
    </div>
    <div class="col-2"></div>
    <div class="col-6">
        <h2 class="h5 section-title p-3">Gửi thắc mắc cho chúng tôi</h2>
        <form action="">
            <label for="">Tên của bạn</label>
            <input type="text" class=" form-control ">
            <label for="">Email của bạn</label>
            <input type="email" class=" form-control ">
            <label for="">Số điện thoại của bạn</label>
            <input type="text" class=" form-control ">
            <label for="">Nội dung</label>
            <textarea name="" id="" cols="30" rows="5" class=" form-control "></textarea>

            <div class="text-center m-3">
                <a href="" class="btn btn-danger">Gửi cho chúng tôi</a>
            </div>

        </form>
    </div>
</div>
@endsection