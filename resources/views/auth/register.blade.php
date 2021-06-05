@extends('layouts.dashboard')

@section('content')

    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-7 col-xl-4 mx-auto">
                        <div class="card">
                            <div class="auth-form-wrapper px-4 py-5">
                                <h2 class="h4 font-weight-normal mb-4">Create a free account</h2>
                                <form class="forms-sample" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" id="name" autocomplete="Username"
                                            placeholder="Username" name="name" value="{{ old('name') }}">

                                        @error('name')
                                            <span class="error mt-2 text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                            value="{{ old('email') }}">

                                        @error('email')
                                            <span class="error mt-2 text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            autocomplete="current-password" placeholder="Password" name="password">

                                        @error('password')
                                            <span class="error mt-2 text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation"
                                            autocomplete="current-password" placeholder="Confirm Password"
                                            name="password_confirmation">
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary text-white mr-2 mb-2 mb-md-0">Sign up</button>
                                    </div>
                                    @if (Route::has('login'))
                                        <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign in</a>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
