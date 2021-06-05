@extends('layouts.dashboard')

@section('content')
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-7 col-xl-4 mx-auto">
                        <div class="card">
                            <div class="">
                                <div class="auth-form-wrapper px-4 py-5">
                                    <h2 class="h4 font-weight-normal mb-4">Welcome back! Log in to your account
                                    </h2>
                                    <form class="forms-sample" method="POST" action="/login">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="error mt-2 text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="exampleInputPassword1" autocomplete="current-password"
                                                placeholder="Password">
                                            @error('password')
                                                <span class="error mt-2 text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-check form-check-flat form-check-primary">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="remember"
                                                    {{ old('remember') ? 'checked' : '' }}>
                                                Remember me
                                            </label>
                                        </div>
                                        <div class="mt-3">
                                            <button class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</button>
                                            {{-- <a href="../../dashboard-one.html"
                                                class="btn btn-primary mr-2 mb-2 mb-md-0 text-white">Login</a> --}}
                                        </div>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                                        @endif
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection
