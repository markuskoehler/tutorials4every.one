@extends('layouts.learning')

@section('content')
    <div id="content">
        <div class="container-fluid">

            <div class="lock-container">
                <div class="panel panel-default text-center paper-shadow" data-z="0.5">
                    <h1 class="text-display-1 text-center margin-bottom-none">Sign In</h1>
                    <!--<img src="images/people/110/guy-5.jpg" class="img-circle width-80">-->
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="form-control-material">
                                    <input class="form-control" id="email" name="email" type="text" placeholder="E-Mail Address"
                                           required autofocus>
                                    <label for="email">E-Mail Address</label>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="form-control-material">
                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password"
                                           required>
                                    <label for="password">Password</label>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me<!-- todo -->
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Login <i class="fa fa-fw fa-unlock-alt"></i>
                                </button><br>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a><br>
                                <a href="{{route('register')}}" class="link-text-color">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('foot')
    <script>
        $(function () {
            $('body').addClass('login');
        });
    </script>
@endpush