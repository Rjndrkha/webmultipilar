@extends('layouts.app')

@section('content')
<html>

<head>
    <meta charset="UTF-8">
    <title>Multipilar - Penyedia Core Banking System BPR,LKM dan Koperasi</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="landing/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="landing/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="landing/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="landing/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="landing/images/favicon/favicon-16x16.png" sizes="16x16">

<body>
    <div class="container">
        <div class="card" style="margin-top: 50px">
            <div class="card-body">
                <h3 style="text-align: center">Hubungi Kami</h3>
                <!-- form konsultasi -->
                <form action="{{ route('consultation.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="phone">No Handphone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="No. HP">
                    </div>
                    <div class="form-group">
                        <label for="instansi">Instansi</label>
                        <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="message">Apa yang anda tanyakan?</label>
                        <textarea class="form-control" id="message" name="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="form-control btn btn-primary">Kirim Pesan</button>
                </form>

                
            </div>
        </div>
    </div>
</body>
</head>

</html>

@endsection