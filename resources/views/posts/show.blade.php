@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pr-4">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle" class="rounded-circle"
                            style=" max-width: 60%; object-fit: contain; margin: auto;">
                    </div>
                    <div>
                        <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"
                                style="text-decoration-line: none"><span
                                    style="color: #000; font-weight:600;">{{ $post->user->username }} </span></a>
                                <a href="#" class="pl-4">Follow</a>
                                </div>
                    </div>
                </div>
                {{-- <h3>{{ $post->user->username }}</h3> --}}
                <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"
                            style="text-decoration-line: none"><span
                                style="color: #000; font-weight:600;">{{ $post->user->username }}
                            </span></a></span>{{ $post->caption }}</p>
            </div>
        </div>
    </div>
@endsection
