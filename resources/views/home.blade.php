@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-4 center d-inline-flex">
                <img src="/images/1.jpg" class="rounded-circle"
                    style=" width: 60%; object-fit: contain; margin: auto;">
            </div>
            <div class="col-9 pt-2">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{   $user->username   }}</h1>
                    <a href="#">Add New Post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5" style="padding-right:3%;"><strong>200</strong> posts</div>
                    <div class="pr-5" style="padding-right:3%;"><strong>250</strong> followers</div>
                    <div class="pr-5" style="padding-right:3%;"><strong>211</strong> following</div>
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
            <div class="col-4">
                <img src="/images/3.jpg" alt="" style="max-width: 250px;" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/4.jpg" alt="" style="max-width: 250px;" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/5.jpg" alt="" style="max-width: 250px;" class="w-100">
            </div>
        </div>
    </div>
@endsection
