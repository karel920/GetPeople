@extends('layout.app_layout')

@section('content-header')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h2>修改安全码</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div>
    <div class="card">

        <div class="card-body">
            <form id="password_form" method="POST" action="{{ route(App\WebRoute::AUTH_RESET_SECURITY_POST) }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="old_security">原始登录安全码</label>
                        <input class="form-control" name="old_security" id="old_security">
                    </div>
                    <div class="form-group">
                        <label for="security">新的登录安全码</label>
                        <input class="form-control" name="security" id="security">
                    </div>
                    <div class="form-group">
                        <label for="confirm_security">确认登录安全码</label>
                        <input type="text" name="confirm_security" class="form-control" id="confirm_security">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">更改安全码</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection

@push('post-header-scripts')
    <script src="{{ asset('/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('/js/plugins/jquery-validation/additional-methods.min.js') }}"></script>
@endpush

@push('post-body-scripts')
<script>
    $(function () {
      $('#password_form').validate({
        rules: {
          old_security: {
            required: true,
          },
          security: {
            required: true,
          },
          confirm_security: {
            equalTo: '#security'
          },
        },
        messages: {
            old_security: {
                required: '请输入原始登录安全码',
            },
            security: {
                required: '请输入新的登录安全码',
            },
            confirm_security: {
                equalTo: '两次输入安全码不一致'
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
    </script>
@endpush
