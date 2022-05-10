@extends('layout.app_layout')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12 text-center home-avatar">
                <img src="/img/car.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="col-12 home-title mt-2">
                {{ auth()->user()->username }}<br>
                {{ auth()->user()->name }}
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="row px-3">

    <div class="col-12 mt-3">
        <div class="item-container">
            <div class="item item-red">
                <a href="{{ route(App\WebRoute::HOME_MONEY) }}">账号首页</a>
            </div>
            <div class="item item-yellow">
                <a href="{{ route(App\WebRoute::TEAM_HOME) }}">团队管理</a>
            </div>
            <div class="item item-blue">
                <a href="{{ route(App\WebRoute::FUND_HOME) }}">财务管理</a>
            </div>
            <div class="item item-green">
                <a href="{{ route(App\WebRoute::AUTH_HOME) }}">个人设置</a>
            </div>
        </div>
    </div>
</div>
@endsection
