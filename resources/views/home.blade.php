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

                        <div class="container">
                            <div class="row gy-4" >
                                <div class="col-md-4">
                                    <a class="siswa-btn" href="{{ route('siswa.index') }}">Go To Siswa</a>
                                    </div>
                                    <a href="{{ route('article') }}">Go To Article</a>
                            </div>
                                


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
