@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <form action="{{ route('login') }}" class="max-w-xs mx-auto" method="POST">
        @csrf

        <div class="mb-6">
            <label class="label mb-2" for="email">
                E-Mail Address
            </label>

            <input class="input @error('email') input-with-error @enderror"
                   id="email" type="email" name="email" value="{{ old('email') }}"
                   autocomplete="email" autofocus>

            @error('email')
                <div class="error mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-6">
            <label class="label mb-2" for="password">
                Password
            </label>

            <input class="input @error('password') input-with-error @enderror"
                   id="password" type="password" name="password"
                   autocomplete="current-password" autofocus>

            @error('password')
                <div class="error mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex items-center mb-6">
            <label class="checkbox-label leading-tight">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

                <span class="checkbox" aria-hidden></span>

                <span class="label ml-2">
                    Remember Me
                </span>
            </label>
        </div>

        <div class="flex items-center">
            <button class="btn btn-gray" type="submit">
                Login
            </button>

            <a href="{{ route('password.request') }}" class="ml-4 text-sm hover:underline">
                Forgot Your Password?
            </a>
        </div>
    </form>
@endsection
