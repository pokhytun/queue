@extends('base')
@section('content')
<div class="auth__container">
    <form action="{{route('register')}}" class="auth-form" method="POST">
        @csrf
        <input type="text" class="auth__input @error('email') auth__input_error @enderror" name="name" placeholder="Ім'я" value="{{ old('name') }}">
        @error('name')
            <span class="auth__message">! {{ $message }}</span>
        @enderror

        <input type="text" class="auth__input @error('phone_number') auth__input_error @enderror" name="phone_number" placeholder="+380 __ ___ ____ " value="{{ old('phone_number') }}">
        @error('phone_number')
            <span class="auth__message">! {{ $message }}</span>
        @enderror

        <input type="text" class="auth__input @error('email') auth__input_error @enderror" name="email" placeholder="Електронна адреса" value="{{ old('email') }}">
        @error('email')
            <span class="auth__message">! {{ $message }}</span>
        @enderror

        <input type="password" class="auth__input @error('password') auth__input_error @enderror" name="password" placeholder="Пароль">
        @error('password')
            <span class="auth__message">! {{ $message }}</span>
        @enderror

        <input id="password-confirm" type="password" class="auth__input  @error('password_confirmation') auth__input_error @enderror" name="password_confirmation"  placeholder="Підтвердіть пароль">

        <div class="check-block">
            <input type="checkbox" name="status" id="status">
            <label for="stauts" class="label__status">Адміністратор </label>
        </div>
        
        <input type="submit" value="Реєстрація" class=" auth__btn">
    </form>
</div>
@endsection
