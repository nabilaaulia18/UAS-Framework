@extends('layout')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Laporan Magang</div>
                    <div class="card-body">
                        <form action="{{url('store-form-report')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="idmhs" class="col-sm-3 col-form-label">ID Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" id="idmhs" class="form-control" name="idmhs" placeholder="ID Mahasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="report" class="col-sm-3 col-form-label">Upload Laporan</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="report" name="report">
                                        <label class="custom-file-label" for="report">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    // Add the following code if you want the name of the file appear on select
                    $(".custom-file-input").on("change", function() {
                        var fileName = $(this).val().split("\\").pop();
                        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                    });
                </script>

                <hr>

                <div class="card">
                    <div class="card-header">Pengajuan Magang</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID Mahasiswa</th>
                                    <th>Laporan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                use Illuminate\Support\Facades\DB;

                                $magang = DB::table('laporans')->get();
                                ?>
                                @foreach($magang as $magang)
                                <tr>
                                    <td>{{ $magang->idmhs }}</td>
                                    <td><a href="/uploads/{{ $magang->laporan }}" target="_blank">{{ $magang->laporan }}</a> </td>
                                    <td><button type="button" class="btn btn-success" disabled>Sudah di Upload</button></td>
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