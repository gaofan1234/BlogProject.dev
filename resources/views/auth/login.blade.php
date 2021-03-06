<form method="POST" action="/auth/login">
{!! csrf_field() !!}

<div>
    Email
    <input type="email" name="email" value="{{ old('email') }}">
</div>

<div>
    Password
    <input type="password" name="password" id="password">
</div>

<div>
    <input type="checkbox" name="remember"> Remember Me
</div>
<div>
    <a href="/password/email">Forgot your password?</a>
</div>
<div>
    <a href="/auth/register">Do not have an account?</a>
</div>

<div>
    <button type="submit">Login</button>
</div>
</form>

@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>
                {!! $error !!}
            </li>

        @endforeach

    </ul>
@endif