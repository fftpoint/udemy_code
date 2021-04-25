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
                    {{-- <a href="{{ route('contact.create') }}">新規登録</a> --}}
                    <button type="submit" class="btn btn-primary" onclick="location.href='{{ route('contact.create') }}'">新規登録</button>
                    {{ __('Indexです') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
