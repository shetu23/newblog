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
{{Auth::user()->name}}
                    <br>
                    {{$msg }}
                </div>
                <a  href="/home/create"class="absolute bottom-1/3 right-10 bg-black text-white py-2 px-5\">
                        Post</a>
            </div>
        </div>
    </div>
</div>
@endsection
