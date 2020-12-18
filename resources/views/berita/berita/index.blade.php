@extends('layouts.app')

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            @include('berita.table')
        </div>
    </div>
</div>

@endsection