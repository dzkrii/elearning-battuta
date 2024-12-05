<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Learning Battuta</title>
    <link rel="shortcut icon" href="/img/battuta.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- my css --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- news slider css --}}
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    {{-- bootstrap icon css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- font awesome icon css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    {{-- aos animation css --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

    {{-- link --}}
    <ul class="nav bg-dark">
        <li class="nav-item ms-auto">
            <a class="nav-link small-text text-warning" href="#"><i class="bi bi-telephone text-warning"></i> +62
                812 6504
                1600</a>
            <!--<a class="nav-link small-text text-warning" href="#"><i class="bi bi-telephone text-warning"></i> +62 812 6504-->
            <!--  1600 <span class="mx-2">|</span> +62 831 4885 6074</a>-->
        </li>
        <span class="mx-2">|</span>
        <li class="nav-item">
            <a class="nav-link text-warning small-text" href="#"><i class="bi bi-envelope-at text-warning"></i>
                admin@e-learning.battuta.ac.id</a>
        </li>
    </ul>
    {{-- end link --}}

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-battuta-dark navbar-dark sticky-top shadow py-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" data-tilt> <img src="/img/battuta.png"
                    class="d-inline-block align-text-middle me-2 img-logo" alt="logo battuta"><span
                    class="text-logo text-white">E-LEARNING UNIVERSITAS BATTUTA</span></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    {{-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li> --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/sejarah">Sejarah</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/visi-misi-tujuan">Visi Misi Tujuan dan Strategi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/mars-hymne">Mars dan Hymne</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Universitas
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/rektorat">Rektorat</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/lembaga-penjamin-mutu">LPM</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://lppmbattuta.ac.id/" target="_blank">LPPM</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/sarana-prasarana">Sarana Prasarana</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Fakultas
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/feb">Fakultas Ekonomi Bisnis</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://ft.battuta.ac.id/" target="_blank">Fakultas
                                    Teknologi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/fhp">Fakultas Hukum & Pendidikan</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            UKM
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="https://proasta.battuta.ac.id/"
                                    target="_blank">Programming Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Robotic Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Multimedia Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Entrepreneurship Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Akuntan & Pajak Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Retail Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Pecinta Alam Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Futsal Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Batminton Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Tenis Meja Club</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/ukm">Kerohanian Club</a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Akademik
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="http://sia.battuta.ac.id/login"
                                    target="_blank">Mahasiswa</a>
                                <!--<a class="dropdown-item" href="http://147.139.170.75/login" target="_blank">Mahasiswa</a>-->
                            </li>
                            <li>
                                <a class="dropdown-item" href="http://sia.battuta.ac.id/dosen/login"
                                    target="_blank">Dosen</a>
                                <!--<a class="dropdown-item" href="http://147.139.170.75/dosen/login" target="_blank">Dosen</a>-->
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://e-learningbattuta.ac.id/"
                                    target="_blank">E-learning</a>
                            </li>
                        </ul>
                    </li> --}}

                    <a href="/admin/login" class="btn buttons text-warning">
                        Login E-Learning</a>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}
