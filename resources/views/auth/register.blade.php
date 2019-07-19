@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <form action="{{ route('register') }}" class="max-w-xs mx-auto" method="POST">
        @csrf

        <div class="mb-6">
            <label class="label mb-2" for="name">
                Name
            </label>

            <input class="input @error('name') input-with-error @enderror"
                   id="name" type="text" name="name" value="{{ old('name') }}"
                   autocomplete="name" autofocus>

            @error('name')
                <div class="error mt-2" role="alert">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-6">
            <label class="label mb-2" for="email">
                E-Mail Address
            </label>

            <input class="input @error('email') input-with-error @enderror"
                   id="email" type="email" name="email" value="{{ old('email') }}"
                   autocomplete="email">

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
                   autocomplete="new-password">

            @error('password')
                <div class="error mt-2" role="alert">
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
            Register
        </button>
    </form>
@endsection
