<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistem Permohonan Magang atau Kerja Praktek</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 py-5 my-4">
                <div class="text-center mb-4">
                    <h1>Sistem Permohonan <br>Magang atau Kerja Praktek</h1>
                </div>

                @if (session()->has('success'))
                <div class="demo-spacing-0 mb-2">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="alert-body">
                            Lamaran anda berhasil terkirim, silahkan mengecek email untuk mendapatkan login detail.
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
                @endif

                <form action="{{ route('kirim-lamaran') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="nik" class="form-label">NIK</label>
                      <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">No Telephone/ Handphone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="sekolah" class="form-label">Sekolah/Universitas</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah">
                    </div>
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan Magang</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="mulai" class="form-label">Waktu Mulai Magang</label>
                                <input type="date" class="form-control" id="mulai" name="mulai">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="berakhir" class="form-label">Waktu Selesai Magang</label>
                                <input type="date" class="form-control" id="berakhir" name="berakhir">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bidang" class="form-label">Bidang yang diminati</label>
                        <input type="text" class="form-control" id="bidang" name="bidang">
                    </div>
                    <div class="mb-3">
                        <label for="lamaran" class="form-label">Surat permohonan magang / kerja praktek dari sekolah/universitas</label>
                        <input class="form-control" type="file" id="lamaran" name="lamaran">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>