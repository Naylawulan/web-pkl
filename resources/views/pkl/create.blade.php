<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Pengajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pkl.store') }}" method="POST" enctype="multipart/form-data">
                            <a href="{{ route('pkl.index') }}" class="btn btn-sm btn-secondary mb-3">Kembali</a>
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Siswa</label>
                                <select class="from-select col-md-12" name="siswa_id" id="siswa_id">
                                    <option class="col-md-12" value="">Select Siswa</option>
                                    @foreach ($data as $siswa)
                                    <option class="col-md-12" value="{{ $siswa->id }}"> {{ $siswa->nama }} </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Dudi</label>
                                <select class="from-select col-md-12" name="dudi_id" id="dudi_id">
                                    <option class="col-md-12" value="">Select  Dudi</option>
                                    @foreach ($item as $dudi)
                                    <option class="col-md-12" value="{{ $dudi->id }}"> {{ $dudi->nama }} </option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">TANGGAL Masuk</label>
                                <input type="date" class ="form-control" name="tgl_masuk" placeholder="">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Tanggal Keluar</label>
                                <input type="date" class="form-control" name="tgl_keluar" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content' );
    </script>

</body>
</html>

