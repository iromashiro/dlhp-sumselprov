@extends('layouts.app')

@section('content')
<div class="col-lg-12">
    <div class="card-wrapper">
        <!-- Input groups -->
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Ubah Password</h3>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <form method="POST" action="{{ route('admin.password.change') }}"
                    aria-label="{{ __('Admin Change Password') }}">
                    @csrf
                    <!-- Input groups with icon -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group input-group-merge">
                                <input id="oldPassword" type="password"
                                    class="form-control{{ $errors->has('oldPassword') ? ' is-invalid' : '' }}"
                                    name="oldPassword" value="{{ $oldPassword ?? old('oldPassword') }}"
                                    placeholder="Masukkan Password Lama" required autofocus>
                                @if($errors->has('oldPassword'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('oldPassword') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group input-group-merge">
                                <input id="password" type="password"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" placeholder="Masukkan Password Baru" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group input-group-merge">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" placeholder="Konfirmasi Password" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
