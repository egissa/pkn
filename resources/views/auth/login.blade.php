<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="shortcut icon" href="{{ asset('frontend/logo/logo.png') }}">
<style type="text/css">
    * {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #12c2e9;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 300px;
    height: 400px;
    padding: 60px;
    line-height: 1.5;
    border-radius: 30px;
    box-shadow: 20px 20px 60px rgba(0, 0, 0, 0.328), -20px -20px 60px rgba(255, 255, 255, 0.342);
    color: #fff;
}

.container h1 {
    font-size: 2.4rem;
    margin-bottom: 30px;
}

.container input {
    outline: none;
    border: none;
    width: 100%;
    height: 5%;
    padding: 13px;
    background-color: transparent;
    box-shadow: 4px 4px 10px rgba(255,255,255, .3), -4px -4px 10px rgba(0,0,0,.2);
    border-radius: 10px;
    margin: 10px 0;
}

.container input[type=email], .container input[type=password] {
    color: #fff;
    font-size: 16px;
}

.container input:focus {
    box-shadow: inset 4px 4px 10px rgba(0,0,0, .2), inset -4px -4px 10px rgba(255,255,255,.3);
}

.container .btn {
    color: #fff;
    margin: 20px 0;
    width: 110%;
    padding: 10px;
    outline: none;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    background-color: transparent;
    box-shadow: 4px 4px 10px rgba(0,0,0, .2), -4px -4px 10px rgba(255,255,255,.3);
}

.container .btn, .container .input::placeholder {
    font-size: 16px;
}

.container .btn:active {
    box-shadow: inset 4px 4px 10px rgba(0,0,0, .2), inset -4px -4px 10px rgba(255,255,255,.3);
}

.container p{
    font-size: 18px;
}

.container a {
    color: #000;
    text-decoration: none;
    transition: .3s;
}

.container  a:hover {
    color: #fff;
}
</style>
</head>
<body>
<div class="container">
        <a href="{{ url('/') }}"><img class="banner-logo" src="{{ asset('frontend/logo/logo.png') }}" alt="" style="width: 120px; height: 110px;"></a>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <p>Nik</p>
            <input type="text" class="@error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="Masukkan Nik Anda">

                    @error('nik')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </br>
            <input type="hidden" name="password" value="user1234" placeholder="Masukkan Password Anda">
            <button type="submit" class="btn">Cek</button>
        </form>
    </div>
</body>
</html>