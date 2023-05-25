@extends('layouts.app')

@section('content')
{{-- {{ $user->id }} --}}
    <div class="container">
        <div class="row">
            <div class="col-3 p-4 center d-inline-flex">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle"
                    style=" width: 60%; object-fit: contain; margin: auto;">
            </div>
            <div class="col-9 pt-2">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{   $user->username   }}</div>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows  }}"></follow-button>
                    </div>

                    @can('update',$user->profile)
                    <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                @can('update',$user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5" style="padding-right:3%;"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pr-5" style="padding-right:3%;"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pr-5" style="padding-right:3%;"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div>
                    <strong>{{   $user->profile->title   }}</strong>
                </div>
                <div>
                    {{   $user->profile->description   }}
                </div>
                <div><a href="http://127.0.0.1:8000/home">{{    $user->profile->url    }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $posts)
            <div class="col-4 pb-5">
                <a href="/p/{{ $posts->id }}">
                <img src="/storage/{{ $posts->image}}" alt="" style="max-width: 250px;" class="w-100">
                </a>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection
