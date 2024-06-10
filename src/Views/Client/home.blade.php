<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/admin/css/style1.css')}}">
</head>
<body>
    <h1>Xin chào</h1>
    {{$name}}
</body>
</html> -->
@extends('layouts.master1')
@section('banner')
<div class="card mb-4">
          <div class="card-body d-flex">
            <img src="{{asset('assets/uploads/banner1.jpg')}}" class="card-img-top" alt="post-thumb">

            <div class="ml-3">
              <h4><a href="post-details.html" class="post-title">The Design Files - Homes Minimalist</a></h4>
              <ul class="card-meta list-inline mb-0">
                <li class="list-inline-item mb-0">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
              </ul>
            </div>
          </div>
        </div>
        
@endsection

@section('content')

<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12  mb-3 mb-lg-0">
                <h2 class="h5 section-title p-3">Top sản phẩm mới nhất</h2>
                <div class="row text-center p-3">
                    <div class="col-12 d-flex flex-wrap justify-content-center m-3">
                        @foreach ($products as $value)
                            <div class="col-3 d-flex align-items-stretch mb-2">
                                <div class="card m-3" style="width: 18rem;">
                                    <img src="{{ $value['img']}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $value['name']}}</h5> <span
                                            class="badge text-bg-danger ">New</span>
                                        <p class="card-text text-danger">Giá: {{ $value['price']}}</p>
                                        <!-- <a href="" class="btn btn-outline-danger">Mua ngay</a> -->

                                        <a href="{{asset("products/{$value['id']}/detail")}}" class="btn btn-outline-primary">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="row  d-flex flex-wrap justify-content-center m-5">

                    <div class="col-3 ">
                        <a href="{{asset('products')}}" class="btn btn-link ">Xem Thêm</a>
                    </div>
                </div>
                <ul class="pagination justify-content-center">
                    <li class="page-item page-item active ">
                        <a href="#!" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#!" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#!" class="page-link">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>


@endsection

@section('sale')
<h3 class="text-center m-3">FASHSALE SALE SẬP SÀN</h3>
<hr>
<div class="row">
    <div class="col-4">
        <img src="{{asset('assets/uploads/sale1.jpg')}}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <img src="{{asset('assets/uploads/sale2.jpg')}}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <img src="{{asset('assets/uploads/sale3.jpg')}}" class="w-100" alt="">
    </div>
</div>

@endsection