@extends('layout')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Surat Pengantar</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Mahasiswa</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Perusahaan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                use Illuminate\Support\Facades\DB;

                                $magang = DB::table('magangs')->get();
                                ?>
                                @foreach($magang as $magang)
                                <tr>
                                    <td>{{ $magang->id }}</td>
                                    <td>{{ $magang->nama }}</td>
                                    <td>{{ $magang->company }}</td>
                                    <td><button type="button" class="btn btn-secondary" disabled>Sedang Diproses</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection