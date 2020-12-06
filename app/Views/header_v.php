<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PanganZ</title>
    <!-- CUSTOM CSS -->
    <!-- BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Merriweather:wght@300;700;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- TINY SLIDER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="<?= base_url('src/css/style.css'); ?>" />

    <style>
        .navbar-brand {
            font-family: "Lora", serif;
        }

        .nav-item>.nav-link {
            font-family: "Merriweather", serif;
            color: black;
        }

        .heading {
            font-family: "Lora", serif;
        }

        .badan {
            font-family: "Merriweather", serif;
            letter-spacing: 2px;
        }

        .text-hijau {
            color: #216869;
        }

        .text-kuning {
            color: #ffc700;
        }

        .btn-hijau {
            background-color: #216869;
            color: white;
        }

        .btn-kuning {
            background-color: #ffc700;
            color: white;
        }

        .btn-hijau:hover {
            background-color: rgb(24, 74, 75);
            color: white;
        }

        .btn-kuning:hover {
            background-color: #b48f09;
            color: white;
        }

        .bg-hijau {
            background-color: #216869;
        }

        li {
            list-style: none;
            padding: 0;
            margin: 0;
            font-weight: bold;
            margin-bottom: 5px;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        #bagian-utama-footer {
            padding: 25px 0;
            background-color: #1f2421;
        }

        .jumbotron {
            background-color: #216869;
        }

        @media (min-width: 1200px) {
            .baris-1-kolom-1-footer {
                margin-left: -35px;
            }

            .baris-1-kolom-2 p {
                font-size: 12px;
            }

            .garis {
                border-left: 2px solid white;
                height: 84px;
            }
        }
    </style>

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white vh-15">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <h1 class="font-weight-bolder">PanganZ</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/artikel') ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/acara') ?>">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/kontak') ?>">Kontak</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="position-relative">
                        <input class="form-control mr-sm-2 rounded-pill pl-5" type="search" placeholder="Cari..." aria-label="Search">
                        <i class="fas fa-search position-absolute text-secondary" style="top: 12px; left:20px"></i>
                    </div>
                </form>
            </div>
        </div>
    </nav>