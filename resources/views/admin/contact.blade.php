@extends('layouts.dash')

@section('title', 'Dashboard Kontak')

@section('content')
@if($contact->isEmpty())
<div class="alert alert-info">Belum ada data kontak yang masuk.</div>
@else
<div class="card shadow">
    <div class="card-header bg-dark text-white">
        <i class="bi bi-people"></i> Data Kontak
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Perusahaan</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contact as $i => $c)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $c->nama }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->perusahaan }}</td>
                    <td>{{ $c->pesan }}</td>
                    <td>{{ $c->created_at->format('d-m-Y H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection