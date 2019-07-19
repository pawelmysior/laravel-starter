@extends('layouts.app')

@section('title', 'Verify Your Email Address')

@section('content')
    @if (session('resent'))
        <div class="alert alert-success mb-4" role="alert">
            A fresh verification link has been sent to your email address.
        </div>
    @else
        <div class="alert alert-error mb-4" role="alert">
            Before proceeding, please check your email for a verification link. If you did not receive the email, <a href="{{ route('verification.resend') }}" class="underline hover:no-underline">click here to request another</a>.
        </div>
    @endif
@endsection
