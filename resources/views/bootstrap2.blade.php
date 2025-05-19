<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Style untuk tabel */
    .styled-table {
        width: 100%; /* Lebar tabel penuh */
        border-collapse: collapse; /* Menghapus jarak antara border tabel */
        background-color: #f4f4f4; /* Warna latar belakang tabel */
    }

    /* Style untuk baris tabel */
    .styled-table tr:nth-child(even) {
        background-color: #e2e2e2; /* Warna latar belakang untuk baris genap */
    }

    .styled-table tr:nth-child(odd) {
        background-color: #ffffff; /* Warna latar belakang untuk baris ganjil */
    }

    /* Style untuk setiap sel tabel */
    .styled-table td {
        padding: 10px 15px; /* Padding untuk memberi ruang di dalam sel */
        text-align: left; /* Mengatur teks ke kiri */
        border: 1px solid #ddd; /* Border untuk setiap sel */
    }

    /* Style untuk header tabel (jika ada) */
    .styled-table th {
        padding: 10px 15px; /* Padding untuk header */
        background-color: #4CAF50; /* Warna latar belakang header */
        color: white; /* Warna teks header */
    }

    /* Hover effect untuk baris tabel */
    .styled-table tr:hover {
        background-color: #ddd; /* Warna latar belakang saat hover */
    }

    </style>
</head>
<body>
    <h1>Viewpoint</h1>

    <table class="styled-table">
        <tr>
            <td>Hyperlink</td>
            <td>Parklink</td>
        </tr>
        <tr>
            <td>ITS Online</td>
            <td>ITS Lambda</td>
        </tr>
    </table>
    
</body>
</html>