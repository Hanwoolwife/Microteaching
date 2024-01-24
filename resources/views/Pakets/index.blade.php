@extends('layouts.app')

@section('content')
<div class="container"><br><br>
            <div class="row">
                <div class="col">
                    <h2 style="text-align: center">DAFTAR PAKET</h2>
                    <a class="btn btn-success" href="{{ route('pakets.create') }}" style="text-align: left">Buat Paket Baru</a>
                </div>
            </div><br>
            {{-- @if ($message = session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif --}}

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Jadwal</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
                @foreach ($pakets as $paket)
                <tr>
                    <td>{{ $paket->id }}</td>
                    <td>{{ $paket->name }}</td>
                    <td>{{ $paket->schedule }}</td>
                    <td style="width: 50%">{{ $paket->detail }}</td>
                    <td>
                        <form action="{{ route('pakets.destroy', $paket->id)}}" method="POST">
                        <a class="btn btn-warning" href="{{ route('pakets.show', $paket->id) }}">Lihat</a>
                        <a class="btn btn-primary" href="{{ route('pakets.edit', $paket->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>

</div>
@endsection