@extends('layouts.app')

@section('content')
<div class="container" style="background: linear-gradient(135deg, #ff9a9e, #fad0c4); padding: 20px; border-radius: 15px;">
    <a href="{{ route('create_user') }}" class="btn mb-3" style="background-color: #ff7eb3; border-color: #ff7eb3; color: white;">Tambah Pengguna Baru</a>

    <div class="card" style="border: none; border-radius: 1rem; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <div class="card-header text-center" style="background: linear-gradient(135deg, #ff758c, #ff7eb3); color: white;">
            <h4 class="card-title">List User</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <p class="card-text text-center">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead style="background: linear-gradient(135deg, #ff85a2, #ffb6c1); color: white;">
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Kelas</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: white;">
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->npm }}</td>
                                <td>{{ $user->kelas_id }}</td>
                                <td>
                                    @if ($user->foto)
                                        <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}" width="50">
                                    @else
                                        <span style="color: #888;">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('users.show', $user->id) }}" class="btn" style="background-color: #ffc107; border-color: #ffc107; color: white;">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
