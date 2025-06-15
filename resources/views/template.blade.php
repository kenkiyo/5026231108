<!DOCTYPE html>
<html lang="en">

<head>
    <title>Muhammad Raihan Hassan : 5026231108</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        :root {
            --sand: #fff8e7;
            --sky: #ccefff;
            --ocean: #99ddff;
            --wave: #66cfff;
            --text: #22577a;
            --hover: #bbf0ff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--sky);
            color: var(--text);
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: var(--sky);
            color: var(--text);
            padding: 1.5rem 0;
            text-align: center;
            box-shadow: 0 3px 6px rgba(34, 87, 122, 0.15);
            font-weight: 800;
            font-size: 2em;
            letter-spacing: 1.2px;
        }

        .header h1{
            background-color: var(--sky);
            color: var(--text);
            padding: 1.5rem 0;
            text-align: center;
            font-weight: 800;
            font-size: 2.5rem;
            letter-spacing: 1.2px;
        }

        .header small {
            color: var(--text);
            font-weight: 500;

        }

        .navbar-custom {
        background-color: var(--sand);
        box-shadow: 0 2px 5px rgba(34, 87, 122, 0.1);
        padding: 0.25rem 0;

        }

        .navbar-custom .nav-link,
        .navbar-custom .navbar-brand {
            color: var(--text);
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .navbar-custom .nav-link:hover {
            color: var(--wave);
            text-decoration: underline;
        }

        .container {
            margin-top: 2rem;
        }

        table {
    border-collapse: collapse; /* biar semua sel nyatu, bukan separate */
    width: 100%;
    background-color: var(--sand);
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(34, 87, 122, 0.1);
    overflow: hidden;
    font-size: 1rem;
    color: var(--text);
    text-align: center; /* isi tabel rata tengah */
    border: 1px solid var(--text); /* border luar tabel */
}

th {
    background-color: var(--wave);
    color: var(--sand);
    font-weight: 700;
    padding: 15px 20px;
    user-select: none;
    border: 1px solid var(--text); /* border antar header */
}

td {
    padding: 14px 20px;
    vertical-align: middle;
    border: 1px solid var(--text); /* border antar cell */
    font-weight: 500;
}

tbody tr:nth-child(odd) {
    background-color: #e9faff;
}

tbody tr:nth-child(even) {
    background-color: var(--sky);
}

tbody tr:hover {
    background-color: var(--hover);
    color: var(--text);
    cursor: pointer;
    transition: background-color 0.3s ease;
}

        .btn {
            border-radius: 6px;
            font-weight: 600;
            padding: 7px 14px;
            font-size: 0.9rem;
            box-shadow: none;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-success {
            background-color: var(--wave);
            color: var(--sand);
            border: none;
        }

        .btn-success:hover {
            background-color: var(--ocean);
            box-shadow: 0 2px 8px rgba(102, 207, 255, 0.4);
        }

        .btn-danger {
            background-color: #e57373;
            color: var(--sand);
            border: none;
        }

        .btn-danger:hover {
            background-color: #ef5350;
            box-shadow: 0 2px 8px rgba(239, 83, 80, 0.4);
        }

        .btn i {
            font-size: 1.1rem;
        }

        footer {
            margin-top: 4rem;
            padding: 1rem;
            text-align: center;
            color: var(--text);
            background-color: var(--sand);
            font-weight: 500;
            box-shadow: 0 -3px 6px rgba(34, 87, 122, 0.05);
        }
        .navbar-custom .nav-link {
        padding: 8px 16px;
        margin: 0 5px;
        border-radius: 8px;
        background-color: transparent;
        border: 1px solid transparent;
        transition: all 0.3s ease-in-out;
        font-weight: 600;
        white-space: nowrap; /* biar tombol tetap 1 baris */
        }

        .navbar-custom .nav-link:hover {
            background-color: var(--hover);
            border-color: var(--text);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            color: var(--text);
        }

        .navbar-nav .nav-item {
            margin: 0 4px;
        }

    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <h1 class="mb-0">Muhammad Raihan Hassan  ||  5026231108</h1>
        <small class="mb-0">Laravel CRUD Project</small>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">TUGAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(34%) sepia(67%) saturate(390%) hue-rotate(174deg) brightness(96%) contrast(88%);"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto nav-pills-custom">
                    <li class="nav-item">
                        <a href="/publishfrontend" class="nav-link">All Frontend</a>
                    </li>
                    <li class="nav-item">
                        <a href="/pegawai" class="nav-link">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a href="/sembako" class="nav-link">Tugas CRUD - Sembako</a>
                    </li>
                    <li class="nav-item">
                        <a href="/karyawan" class="nav-link">Latihan UAS - Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a href="/keranjangbelanja" class="nav-link">Latihan UAS - Keranjang Belanja</a>
                    </li>
                    <li class="nav-item">
                        <a href="/latihan1" class="nav-link">#</a>
                    </li>
                    <li class="nav-item">
                        <a href="/latihan2" class="nav-link">#</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        &copy; 2025 Muhammad Raihan Hassan • All rights reserved.
    </footer>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
