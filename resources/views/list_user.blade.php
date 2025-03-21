@extends('layouts.app')

@section('content')

<section class="d-flex justify-content-center align-items-center vh-100" style="background: linear-gradient(135deg, #ff9a9e, #fad0c4);"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10"> 
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden"> 
                    <div class="card-header text-center text-white" style="background: linear-gradient(135deg, #ff758c, #ff7eb3);">
                        <h3 class="card-title fw-bold">List User</h3>
                    </div>
                    <div class="card-body p-4"> 
                        <p class="text-center text-muted">Berikut adalah daftar pengguna yang terdaftar dalam sistem.</p>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped text-center align-middle border rounded-3"> 
                                <thead class="text-white" style="background: linear-gradient(135deg, #ff85a2, #ffb6c1);"> 
                                    <tr>
                                        <th class="py-3">ID</th>
                                        <th class="py-3">Nama</th>
                                        <th class="py-3">NPM</th>
                                        <th class="py-3">Kelas</th>
                                        <th class="py-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="fw-semibold">{{ $user->id }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->npm }}</td>
                                        <td>{{ $user->nama_kelas }}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
