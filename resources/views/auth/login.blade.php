@extends('base')

@section('content')
<div class="auth__container">
    <form action="" class="auth-form" method="POST">
        @csrf
        <input type="text" class="auth__input  @error('email') auth__input_error @enderror" name="email" placeholder="Електронна адреса" value="{{ old('email') }}">
        @error('email')
        <span class="auth__message">! {{ $message }}</span>
        @enderror

        <input type="password" class="auth__input  @error('password') auth__input_error @enderror" name="password" placeholder="Пароль" value="{{ old('password') }}">
        @error('password')
        <span class="auth__message">! {{ $message }}</span>
        @enderror

        <input type="submit" value="Вхід" class="btn btn_bg_pink btn_medium auth__btn">
    </form>
</div>
@endsection