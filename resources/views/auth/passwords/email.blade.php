@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
    <div class="px-6 sm:px-0">
        <form action="{{ route('password.email') }}" class="max-w-xs mx-auto" method="POST">
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

            <button class="btn btn-gray" type="submit">
                Send Password Reset Link
            </button>
        </form>
    </div>
@endsection
