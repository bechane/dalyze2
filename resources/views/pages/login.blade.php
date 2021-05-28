@extends('layout.Template')
@section('title')
    {{$title}}
@endsection

@section('content')
    

    <div class="big container login-page">
        <div class="cont">
            <div class="form sign-in">
                <form class="login" >
                    <h2>Sign In</h2>
                    <label>
                        <input class=" input-lg" type="text" name="user" placeholder="Username" autocomplete="off" />
                    </label>
                    <label>
                        <input class="input-lg" type="password" name="pass" placeholder="Password" autocomplete="new-password" />
                    </label>
                    <input class="btn btn-primary  submit" name="login" type="submit" value="Login" />
                    <p class="forgot-pass">Forgot Password ?</p>
                </form>
            </div>
    
            <div class="sub-cont">
                <div class="img">
                    <div class="img-text m-up">
                        <h2>New here?</h2>
                        <p>Sign up and discover great amount of new opportunities!</p>
                    </div>
                    <div class="img-text m-in">
                        <h2>One of us?</h2>
                        <p>
                            If you already has an account, just sign in. We've missed you!
    
                        </p>
                    </div>
                    <div class="img-btn">
                        <span class="m-up">Sign Up</span>
                        <span class="m-in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up">
                    <form class="login" >
                        <h2>Sign In</h2>
                        <label>
                            <input class=" input-lg" type="text" name="user" pattern=".{4,}" title="Username must be more than 4 Chars" require placeholder="Username" autocomplete="off" />
                        </label>
    
                        <label>
                            <input class="input-lg" type="email" name="email" placeholder="Email" autocomplete="new-password" require />
                        </label>
                        <label>
                            <input class="input-lg" minlength="3" type="password" name="pass" placeholder="Password" require autocomplete="new-password" />
                        </label>
                        <label>
                            <input class="input-lg" type="password" minlength="3" name="pass_confirm" placeholder="Confirm Password" autocomplete="new-password" />
                        </label>
                        <input class="btn btn-primary  submit" name="signup" type="submit" value="Signup" />
    
                        <p class="forgot-pass">Forgot Password ?</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection