@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
    <div class="px-6 sm:px-0">
        <form action="{{ route('password.update') }}" class="max-w-xs mx-auto" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="mb-6">
                <label class="label mb-2" for="email">
                    E-Mail Address
                </label>

                <input class="input @error('email') input-with-error @enderror"
                       id="email" type="text" name="email" value="{{ $email ?? old('email') }}"
                       autocomplete="email" autofocus>

                @error('email')
                    <div class="error mt-2">
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
                       autocomplete="new-password">

                @error('password')
                    <div class="error mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="label mb-2" for="password_confirmation">
                    Confirm Password
                </label>

                <input class="input"
                       id="password_confirmation" type="password" name="password_confirmation"
                       autocomplete="new-password">
            </div>

            <button class="btn btn-gray" type="submit">
                Reset Password
            </button>
        </form>
    </div>
@endsection
