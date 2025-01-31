@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="mt-5 col-md-6">
            <div class="login-container p-4 rounded shadow bg-white text-center">
                <div class="logo mt-4 mb-4">
                    <a href="{{url('/')}}"><img src="{{asset('asset\logo_nufi.png')}}" alt="Logo" style="max-width: 120px;"></a>
                </div>
                <h3 class="mb-4 fw-bold text-success">ADMIN LOGIN</h3>
                @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                
                <form method="POST" action="{{ route('admin.login.post') }}">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">EMAIL</label>
                        <input type="email" name="email" class="form-control" id="email" required style="padding-left: 10px; padding-right: 10px;">
                    </div>
                    <div class="mb-5 text-start">
                        <label for="password" class="form-label">PASSWORD</label>
                        <input type="password" name="password" class="form-control" id="password" required style="padding-left: 10px; padding-right: 10px;">
                    </div>
                    <button type="submit" class="mb-3 btn btn-success fw-bold btn-lg w-50">LOGIN</button>
                </form>
               
            </div>
        </div>
    </div>
</div>
@endsection
