<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pkl</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('pkl.create') }}" class="btn btn-md btn-success mb-3">Tambah Pkl</a>
                        <a href="{{ route('siswa.index') }}" class="btn btn-md btn-secondary mb-3">Siswa</a>
                        <a href="{{ route('dudi.index') }}" class="btn btn-md btn-secondary mb-3">Dudi</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Nama Dudi</th>
                                <th scope="col">Tanggal Masuk</th>
                                <th scope="col">Tanggal Keluar</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($pkl as $index =>$pkl)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $pkl->siswa->nama }}</td>
                                    <td>{{ $pkl->dudi->nama }}</td>
                                    <td>{{ $pkl->tgl_masuk}}</td>
                                    <td>{{ $pkl->tgl_keluar}}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pkl.destroy', $pkl->id) }}" method="POST">
                                            <a href="{{ route('pkl.edit', $pkl->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Post belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

</body>
</html>

