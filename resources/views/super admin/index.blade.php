@extends('layouts.super-admin.master')

@section('title')
    EduConnect
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endsection

@section('content')
    <section class="content">
        <!-- Start title -->
        <div class="container-fluid">
            <div class="title">
                <div class="page-title">لوحة التحكم</div>
                <div class="page-breadcrumb">
                    <ul>
                        <li class="item active"><a href="#">الرئيسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End title -->
        <!-- Start main content -->
        <div class="boxes">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="box">
                            <div class="content">
                                <h3>الأرباح</h3>
                                <p>500$</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="box">
                            <div class="content">
                                <h3>عدد الكورسات</h3>
                                <p>200</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-photo-film"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">

                        <a href="#" class="box">
                            <div class="content">
                                <h3>عدد الطلاب</h3>
                                <p>120</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="#" class="box">
                            <div class="content">
                                <h3>عدد المعلمين</h3>
                                <p>80</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-chalkboard-user"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="revenue-chart"></div>
                </div>
                <div class="col-md-6">
                    <div class="latest-courses"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End main content -->
@endsection
