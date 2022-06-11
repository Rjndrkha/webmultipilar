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
                <form>
                    <div class="mb-3" style="margin-top: 10px">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                        <input type="phone" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Apa yang anda tanyakan?</label>
                        <textarea class="form-control" aria-label="Apa yang anda tanyakan?"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="form-control btn btn-primary">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</head>

</html>

@endsection