<!DOCTYPE html>
<html lang="en">

<head>
    <title>Burhan Shidqi Arrasyid : 5026231074</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f7f3e9;
            color: #4a3c31;
            font-family: 'Open Sans', sans-serif;
        }

        .jumbotron {
            background-color: #8c5d41;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            border-bottom: 3px solid #d9a05b;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            margin-bottom: 0;
            padding: 0;
        }

        .jumbotron h1 {
            font-size: 2.5rem;
            font-family: 'Merriweather', serif;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .navbar {
            background-color: #6a4231 !important;
            border-bottom: 1px solid #d9a05b;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            justify-content: center;
        }

        .navbar-nav .nav-link {
            color: #f7f3e9 !important;
            font-weight: 600;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #d9a05b !important;
            text-shadow: 0 0 5px rgba(217, 160, 91, 0.5);
        }

        .navbar-nav .nav-item.active .nav-link {
            color: #d9a05b !important;
            text-shadow: 0 0 5px rgba(217, 160, 91, 0.7);
            border-bottom: 2px solid #d9a05b;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .table {
            background-color: #fff8eb;
            color: #4a3c31;
            border: 1px solid #d9a05b;
            border-radius: 5px;
            overflow: hidden;
        }

        .table thead th {
            background-color: #d9a05b;
            color: #4a3c31;
            border-bottom: 2px solid #8c5d41;
        }

        .table tbody tr {
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #fcecdb;
        }

        .btn {
            background-color: #8c5d41;
            color: #ffffff;
            border: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            background-color: #a37255;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            color: #ffffff;
        }
        .btn-success {
            background-color: #6a994e;
            border: none;
        }
        .btn-success:hover {
            background-color: #80b368;
        }
        .btn-danger {
            background-color: #cc4e4e;
            border: none;
        }
        .btn-danger:hover {
            background-color: #e06868;
        }
        .btn-info {
            background-color: #5b92e5;
            border: none;
        }
        .btn-info:hover {
            background-color: #71a9f9;
        }

    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231074 : Burhan Shidqi Arrasyid</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kue">Tugas CRUD: Kue</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/eas">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjangbelanja">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pagecounter">Latihan 3</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
