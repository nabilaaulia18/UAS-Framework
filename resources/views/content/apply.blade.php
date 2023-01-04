@extends('layout')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajukan Magang</div>
                    <div class="card-body">
                        <form action="{{url('store-form-apply')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="idmhs" class="col-sm-3 col-form-label">ID Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" id="idmhs" class="form-control" name="idmhs" placeholder="ID Mahasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" id="fname" class="form-control" name="fname" placeholder="Nama Mahasiswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-sm-3 col-form-label">Kelas</label>
                                <div class="col-sm-9">
                                    <select class="custom-select" id="class" name="class">
                                        <option selected disabled>Silahkan Pilih ...</option>
                                        <option value="5A-TI">5A-TI</option>
                                        <option value="5B-TI">5B-TI</option>
                                        <option value="7A-TI">7A-TI</option>
                                        <option value="7B-TI">7B-TI</option>
                                        <option value="5A-SI">5A-SI</option>
                                        <option value="5B-SI">5B-SI</option>
                                        <option value="7A-SI">7A-SI</option>
                                        <option value="7B-SI">7B-SI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="company" class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                <div class="col-sm-9">
                                    <input type="text" id="company" class="form-control" name="company"
                                    placeholder="Nama Perusahaan Tujuan">
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <input class="btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
