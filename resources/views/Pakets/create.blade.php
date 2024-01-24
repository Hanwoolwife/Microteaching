@extends('layouts.app')

@section('content')
<div class="container"><br><br>
    <div class="card" style="margin-right: 30%; margin-left: 30%">
        <div class="card-body">
            <form action="{{ route('pakets.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Paket</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Jadwal</label>
                    <input type="date" name="schedule" class="form-control" id="exampleFormControlInput2">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detail Paket</label>
                    <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                {{-- <a class="btn btn-primary" href="">Back</button> --}}
                <a type="button" class="btn btn-primary" href="{{ route('pakets.index') }}">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection