@extends('Layouts.page')

@section('title', 'Trang cá nhân')

@section('css')
	<!-- Animate.css -->
	<link rel="stylesheet" href="Homepage/css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="Homepage/css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="Homepage/css/bootstrap.css">

	<!-- Fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
	<!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<!-- My css -->
	<link rel="stylesheet" href="Base/css/base.css">
	<link rel="stylesheet" href="Homepage/css/header.css">
	<link rel="stylesheet" href="Homepage/css/style.css">

	<link rel="stylesheet" href="ProfilePage/css/style.css">
@endsection

@section('js')
	<!-- Modernizr JS -->
	<script src="Homepage/js/modernizr-2.6.2.min.js"></script>
	<!-- jQuery -->
	<script src="Homepage/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="Homepage/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="Homepage/js/bootstrap.min.js"></script>
	<!-- Bootstrap DateTimePicker -->
	<script src="Homepage/js/moment.js"></script>
	<script src="Homepage/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Waypoints -->
	<script src="Homepage/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="Homepage/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="Homepage/js/jquery.flexslider-min.js"></script>
	<!-- Modal -->
	<script src="Homepage/js/micromodal.min.js"></script>
	<!-- Wow - animation when scroll page -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- Owl carousel -->
	<script src="vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
	<script src="Homepage/js/owl-carousel.js"></script>

	<script src="Homepage/js/home.js"></script>
@endsection

@section('content')
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
	  <div class="modal-content">
		<div class="modal-body">
		  <h2 class="p-4">Bạn có chắc chắn muốn xoá tài khoản không?</h2>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn confirm" data-dismiss="modal">Không</button>
		  <button type="submit" form="delete_form" class="btn">Có</button>
		</div>
	  </div>
	</div>
  </div>
  
<div id="container">
    @include('Layouts.header')

	<div class="container py-5">
		<div class="d-flex align-items-center justify-content-center section-header pb-5">
		  <h1>CÀI ĐẶT</h1>
		</div>
		<div class="row justify-content-center">
			<div class="col-10 top-nav">
				<ul class="row">
				  <li class="col p-0">
					<a class="item">Tài khoản</a>
				  </li>
				  <li class="col p-0">
					<a class="item">Thông tin</a>
				  </li>
				  <li class="col p-0">
					<a class="item">Mật khẩu</a>
				  </li>
				</ul>
			</div>
		</div>
		<div class="row justify-content-center">
		  <div class="col-2 side-nav">
			<ul>
			  <li>
				<a class="item">Tài khoản</a>
			  </li>
			  <li>
				<a class="item">Thông tin</a>
			  </li>
			  <li>
				<a class="item">Mật khẩu</a>
			  </li>
			</ul>
		  </div>
		  <div class="col-10">
			<div class="panel shadow-sm bg-white">
	
			  <!-- Account page -->
			  <div id="content-0">
				<h1 class="mb-4">Tài khoản</h1>
				<div class="section-avatar">
				  <h3>Avatar</h3>
				  <div class="d-flex py-3 align-items-center">
					<img src="{{ url(Auth::user()->avatar) }}" alt="avatar">
					<form action="{{ url('/profile') }}" method="POST" enctype="multipart/form-data">
					  @csrf
					  <label for="upload_avatar" class="btn shadow-sm">Tải lên</label>
					  <input type="file" onchange="this.form.submit()" name="upload_avatar" id="upload_avatar" hidden>
					</form>
				  </div>
				</div>
				<div>
				  <form id="name_form" action="{{ url('/profile') }}" method="POST">
					@csrf
					<hr>
					<div class="row pb-4">
					  <div class="col-md">
						<div class="section-input-label d-flex justify-content-between">
						  <label for="name">
							<h4>Tên đầy đủ</h4>
						  </label>
						  <small>Bạn muốn được gọi như thế nào</small>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="{{ Auth::user()->name }}">
					  </div>
					  <div class="col-md">
						<div class="section-input-label d-flex justify-content-between">
						  <label for="email">
							<h4>Email</h4>
						  </label>
						  <small>Cho việc đăng nhặp</small>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="{{ Auth::user()->email }}"
						  disabled>
					  </div>
					</div>
				  </form>
					<hr>
					<div class="row pb-4">
					  <div class="col">
						<h3>Liên Kết Tài Khoản</h3>
						<small>Phục vụ việc đăng nhập và cung cấp thông tin</small>
						<div class="d-flex align-items-center pt-5">
						  <img
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGQkJCMDA7IiBkPSJNMTEzLjQ3LDMwOS40MDhMOTUuNjQ4LDM3NS45NGwtNjUuMTM5LDEuMzc4QzExLjA0MiwzNDEuMjExLDAsMjk5LjksMCwyNTYNCgljMC00Mi40NTEsMTAuMzI0LTgyLjQ4MywyOC42MjQtMTE3LjczMmgwLjAxNGw1Ny45OTIsMTAuNjMybDI1LjQwNCw1Ny42NDRjLTUuMzE3LDE1LjUwMS04LjIxNSwzMi4xNDEtOC4yMTUsNDkuNDU2DQoJQzEwMy44MjEsMjc0Ljc5MiwxMDcuMjI1LDI5Mi43OTcsMTEzLjQ3LDMwOS40MDh6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNTE4RUY4OyIgZD0iTTUwNy41MjcsMjA4LjE3NkM1MTAuNDY3LDIyMy42NjIsNTEyLDIzOS42NTUsNTEyLDI1NmMwLDE4LjMyOC0xLjkyNywzNi4yMDYtNS41OTgsNTMuNDUxDQoJYy0xMi40NjIsNTguNjgzLTQ1LjAyNSwxMDkuOTI1LTkwLjEzNCwxNDYuMTg3bC0wLjAxNC0wLjAxNGwtNzMuMDQ0LTMuNzI3bC0xMC4zMzgtNjQuNTM1DQoJYzI5LjkzMi0xNy41NTQsNTMuMzI0LTQ1LjAyNSw2NS42NDYtNzcuOTExaC0xMzYuODlWMjA4LjE3NmgxMzguODg3TDUwNy41MjcsMjA4LjE3Nkw1MDcuNTI3LDIwOC4xNzZ6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojMjhCNDQ2OyIgZD0iTTQxNi4yNTMsNDU1LjYyNGwwLjAxNCwwLjAxNEMzNzIuMzk2LDQ5MC45MDEsMzE2LjY2Niw1MTIsMjU2LDUxMg0KCWMtOTcuNDkxLDAtMTgyLjI1Mi01NC40OTEtMjI1LjQ5MS0xMzQuNjgxbDgyLjk2MS02Ny45MWMyMS42MTksNTcuNjk4LDc3LjI3OCw5OC43NzEsMTQyLjUzLDk4Ljc3MQ0KCWMyOC4wNDcsMCw1NC4zMjMtNy41ODIsNzYuODctMjAuODE4TDQxNi4yNTMsNDU1LjYyNHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGMTQzMzY7IiBkPSJNNDE5LjQwNCw1OC45MzZsLTgyLjkzMyw2Ny44OTZjLTIzLjMzNS0xNC41ODYtNTAuOTE5LTIzLjAxMi04MC40NzEtMjMuMDEyDQoJYy02Ni43MjksMC0xMjMuNDI5LDQyLjk1Ny0xNDMuOTY1LDEwMi43MjRsLTgzLjM5Ny02OC4yNzZoLTAuMDE0QzcxLjIzLDU2LjEyMywxNTcuMDYsMCwyNTYsMA0KCUMzMTguMTE1LDAsMzc1LjA2OCwyMi4xMjYsNDE5LjQwNCw1OC45MzZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg=="
							class="logo" />
						  <span class="pl-4">Đăng nhập với Google</span>
						  <span class="btn shadow-sm ml-auto">Kết nối</span>
						</div>
					  </div>
					</div>
					<hr>
					<div class="row pb-4">
					  <div class="col">
						<div class="d-flex align-items-center">
						  <div>
							<h3>Xoá Tài Khoản</h3>
							<small>Bạn sẽ mất hết dữ liệu khi xoá tài khoản</small>
						  </div>
						  <span class="btn danger ml-auto mb-0" data-toggle="modal" data-target="#staticBackdrop">Xoá tài khoản...</span>
						</div>
					  </div>
					</div>
					<hr>
					<div class="d-flex align-items-center section-save-change-btn">
						<input type="submit" form="name_form" class="btn primary shadow-sm ml-auto" value="Lưu thay đổi">
					</div>

				  <form id="delete_form" action="{{ url('/profile') }}" method="POST" hidden>
					@method('delete')
					@csrf
					<input type="hidden" name="delete_account" value="yes">
				  </form>

				  @if (session('status-success-0'))
				  <div class="alert alert-success auto-hide" role="alert">
					{{ session('status-success-0') }}
				  </div>
				  @endif

				  @if (session('status-success-1'))
				  <div class="alert alert-success auto-hide" role="alert">
					{{ session('status-success-1') }}
				  </div>
				  @endif

				  @if (session('status-error-1'))
				  <div class="alert alert-danger auto-hide" role="alert">
					{{ session('status-error-1') }}
				  </div>
				  @endif
				  
				</div>
			  </div>
	
			  <!-- Info page -->
			  <div id="content-1" hidden>
				<h1 class="mb-4">Thông tin cá nhân</h1>
				<form action="{{ url('/profile') }}" method="POST">
				  @csrf
				  <div class="row pb-4">
					<div class="col-md">
					  <div class="section-input-label d-flex justify-content-between">
						<label for="date_of_birth">
						  <h4>Ngày sinh</h4>
						</label>
						<small>Cho các dịch vụ</small>
					  </div>
					  <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ Auth::user()->date_of_birth ?? '' }}"
						min="1800-01-01" max="2021-12-31">
					</div>
					<div class="col-md">
					  <div class="section-input-label d-flex justify-content-between">
						<label for="job">
						  <h4>Nghề nghiệp</h4>
						</label>
						<small>Cho các dịch vụ</small>
					  </div>
					  <input type="text" class="form-control" id="job" name="job" placeholder="{{ Auth::user()->job ?? '' }}">
					</div>
				  </div>
				  <hr>
				  <div class="row pb-4">
					<div class="col-md">
					  <div class="section-input-label d-flex justify-content-between">
						<label for="weight">
						  <h4>Cân nặng (kg)</h4>
						</label>
						<small>Cho các dịch vụ</small>
					  </div>
					  <input type="number" class="form-control" id="weight" name="weight" placeholder="{{ Auth::user()->weight ?? '' }}">
					</div>
					<div class="col-md">
					  <div class="section-input-label d-flex justify-content-between">
						<label for="height">
						  <h4>Chiều cao (cm)</h4>
						</label>
						<small>Cho các dịch vụ</small>
					  </div>
					  <input type="number" class="form-control" id="height" name="height" placeholder="{{ Auth::user()->height ?? '' }}">
					</div>
				  </div>
				  <hr>
				  <div class="d-flex align-items-center section-save-change-btn">
					<input type="submit" class="btn primary shadow-sm ml-auto" value="Lưu thay đổi">
				</div>
				</form>
				@if (session('status-success-1'))
				<div class="alert alert-success auto-hide" role="alert">
					{{ session('status-success-1') }}
				</div>
				@endif
			  </div>
			  
			  {{-- Change Password --}}
			  <div id="content-2" hidden>
				<h1 class="mb-4">Thay đổi mật khẩu</h1>
				<form action="{{ url('/profile') }}" method="POST">
					@csrf
					<div class="row pb-4">
					  <div class="col">
						<div class="section-input-label d-flex justify-content-between">
						  <label for="old_password">
							<h4>Mật khẩu hiên tại</h4>
						  </label>
						</div>
						<input type="password" class="form-control" id="old_password" name="old_password">
					  </div>
					</div>
					<hr>
					<div class="row pb-4">
						<div class="col">
						  <div class="section-input-label d-flex justify-content-between">
							<label for="new_password">
							  <h4>Mật khẩu mới</h4>
							</label>
						  </div>
						  <input type="password" class="form-control" id="new_password" name="new_password">
						  <div class="alert alert-danger" id="alert_new_password" role="alert" hidden></div>
						</div>
					</div>
					<hr>
					<div class="row pb-4">
						<div class="col">
						  <div class="section-input-label d-flex justify-content-between">
							<label for="retype_new_password">
							  <h4>Xác nhận mật khẩu mới</h4>
							</label>
						  </div>
						  <input type="password" class="form-control" id="retype_new_password" name="retype_new_password">
						  <div class="alert alert-danger" id="alert_retype_new_password" role="alert" hidden></div>
						</div>
					</div>
					<hr>
					<div class="d-flex align-items-center section-save-change-btn">
						<input type="submit" class="btn primary shadow-sm ml-auto" value="Lưu thay đổi">
					</div>
				  </form>
				  @if (session('status-success-1'))
				  <div class="alert alert-success auto-hide" role="alert">
					  {{ session('status-success-1') }}
				  </div>
				  @endif
			  </div>
	
			</div>
		  </div>
		</div>
	  </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="ProfilePage/js/utils.js"></script>

@endsection