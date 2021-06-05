@extends('Layouts.page')
@section('title', 'Foodee - Gợi ý thực đơn')
@section('css')
<link rel="stylesheet" href="/SuggestionPage/css/suggestion.css">
@endsection

@section('js')
<script src="/SuggestionPage/js/suggestion.js"></script>
@endsection

@section('content')
@include('Layouts.header')
@php
@endphp
<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <div class="user">
                <div class="user__detail">
                    <a href="/">
                        <div class="image__box">
                            <img src="@php echo Auth::user()->avatar @endphp" alt="" class="user__detail-avatar">
                        </div>
                        <div class="user__detail-name">@php echo Auth::user()->name @endphp</div>
                        <i class="user__detail-diamon far fa-gem"></i>
                    </a>
                </div>
                <ul class="user__action">
                    <li class="user__action-item --active" tabindex="1" onclick="handleSelectTab(this)">
                        Gợi ý thực đơn <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="user__action-item" tabindex="2" onclick="handleSelectTab(this)">
                        Danh sách thực đơn <i class="fas fa-chevron-right"></i>
                    </li>
                    <li class="user__action-item" tabindex="3" onclick="handleSelectTab(this)">
                        Nhà hàng đã lưu <i class="fas fa-chevron-right"></i>
                    </li>
                </ul>
                <!-- logout -->
                <div class="user__logout-box">
                    <a href="{{ route('logout') }}" class="user__logout" onclick="event.preventDefault(); document.getElementById('logout-form-user').submit();Cookies.remove('isShowNotify');">
                        <div>Đăng xuất</div> <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form-user" action="{{ route('logout') }}" method="POST" hidden>@csrf</form>
                </div>
                <div class="flex-center loading-img__box">
                    <img id="suggestion-loading-img" src="/assets/images/loading.svg" width="30px" height="30px" alt="loading"></img>
                </div>
            </div>

        </div>
        <div class="col-lg-9">
            <div class="suggestion-box">
                <div id="suggestion-panel" class="suggestion">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space"></div>
<!-- end of content -->
@include('Layouts.footer')
@endsection