@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/ejay.png" class="rounded-circle" style="height: 200px; width: 200px;" alt="profile-img">
        </div>
        <div class="col-9 pt-5">
            <div><h1>EjayVibar</h1></div>
            <div class="d-flex align-items-center">
                <div style="padding-right: 4%;"><strong>100</strong> posts</div>
                <div style="padding-right: 4%;"><strong>20k</strong> followers</div>
                <div style="padding-right: 4%;"><strong>200</strong> following</div>
            </div>
            <div class="pt-4 fw-bold">User Title</div>
            <div>User Description</div>
            <div><a>Website Url</a></div>
        </div>
        <div class="row">
            <div class="col-4"><img src="https://source.unsplash.com/1600x900/?computers" alt=""></div>
            <div class="col-4"><img src="https://source.unsplash.com/1600x900/?landscape" alt=""></div>
            <div class="col-4"><img src="https://source.unsplash.com/1600x900/?dogs" alt=""></div>
        </div>
    </div>
</div>
@endsection
