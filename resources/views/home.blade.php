@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bạn đã đăng nhập thành công!') }}
                    <div class="mt-4">
                        <a href="{{ route('users.all') }}" class="btn btn-primary mr-2">Xem người dùng</a>
                        <a href="{{ route('chat.show') }}" class="btn btn-primary">Vào phòng Chat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
