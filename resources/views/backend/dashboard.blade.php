@extends('backend.dlayout.main')
@section('content')

    <div class="pagetitle">
        <h1>{{ Auth::user()->name }}'s</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
@endsection