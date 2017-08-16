@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-5">
                <div class="card-block">
                    <div class="card-title">Login</div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('email') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <small class="form-text text-muted">
                                    {{ $errors->first('password') }}
                                </small>
                            @endif
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember Me
                            </label>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
