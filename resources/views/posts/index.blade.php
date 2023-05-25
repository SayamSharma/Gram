@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                    </a>
                </div>
            </div>
            <div class="row pb-4 pt-2">
                <div class="col-6 offset-3">

                    <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"
                                style="text-decoration-line: none"><span
                                    style="color: #000; font-weight:600;">{{ $post->user->username }}
                                </span></a></span>{{ $post->caption }}</p>
                </div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links("pagination::bootstrap-5") }}
            </div>
        </div>
    </div>
@endsection
