@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Paket</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pakets.index') }}">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection