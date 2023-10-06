<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
    <link href="<?= BASE_URL ?>/img/dmnd.png" rel="shortcut icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
            *{
                font-family: 'Raleway', sans-serif;
            }
                .nav-pills li-a:hover{
                    background-color: blue;
                }

                .loader-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #242f3f;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        .loader {
        display: inline-block;
        width: 30px;
        height: 30px;
        position: relative;
        border: 4px solid #Fff;
        animation: loader 3s infinite ease;
        }

        .loader-inner {
        vertical-align: top;
        display: inline-block;
        width: 100%;
        background-color: #fff;
        animation: loader-inner 2s infinite ease-in;
        }

        @keyframes loader {
        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(180deg);
        }

        50% {
            transform: rotate(180deg);
        }

        75% {
            transform: rotate(360deg);
        }

        100% {
            transform: rotate(360deg);
        }
        }

        @keyframes loader-inner {
        0% {
            height: 0%;
        }

        25% {
            height: 0%;
        }

        50% {
            height: 100%;
        }

        75% {
            height: 100%;
        }

        100% {
            height: 0%;
        }
        }
                
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light mb-3">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-primary" href="<?= BASE_URL ?>/home/index">WesBluemarine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>/home/index">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL ?>/buku/index">Dipinjam</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASE_URL ?>/buku/tambah">Tambah Peminjaman</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>