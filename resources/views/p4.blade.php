<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bootstrap</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
         body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            color: #333;
        }
        
        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #0D4A7C;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 0;
            display: block;
        }
        .sidebar a:hover {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }
        /* Main Content Styling */
        .main-content {
            margin-left: 270px;
            padding: 20px;
        }
        .card {
            border-radius: 10px;
        }
        .profile-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3> 
                <img src="user.png" alt="" width="50" class="mr-2"> User
            </h3>
            <p>user@mail.com</p>
            <ul class="list-unstyled">
                <li><a href="#"> <i class="fa fa-tasks"></i> Helperlog</a></li>
                <li><a href="#"> <i class="fa fa-search"></i> Helperfind</a></li>
                <li><a href="#"> <i class="fa fa-comment"></i> Helperassist</a></li>
            </ul>
            <button class="btn btn-light btn-block mt-3">Log Out</button>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h1 class="mb-4">Helperlog Dashboard</h1>
            
            <div class="row">
                <!-- Card 1 -->
                <div class="col-12 mb-3">
                    <div class="card shadow-sm p-3" style="min-height: 150px;">
                        <div class="d-flex align-items-center">
                            <img src="intan.png" class="profile-img mr-3" alt="Intan Permata">
                            <div>
                                <h6 class="mb-1 font-weight-bold">Intan Permata</h6>
                                <small class="text-muted">Baby Sitter</small>
                                <p class="mb-1 text-muted">Masa Kontrak: 12 bulan</p>
                            </div>
                            <div class="ml-auto text-center">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <small class="text-muted d-block">Beri Penilaian</small>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Card 2 -->
                <div class="col-12 mb-3">
                    <div class="card shadow-sm p-3" style="min-height: 150px;">
                        <div class="d-flex align-items-center">
                            <img src="budi.png" class="profile-img mr-3" alt="Budi Dorami">
                            <div>
                                <h6 class="mb-1 font-weight-bold">Budi Dorami</h6>
                                <small class="text-muted">Satpam</small>
                                <p class="mb-1 text-muted">Masa Kontrak: 6 bulan</p>
                            </div>
                            <div class="ml-auto text-center">
                                <b class="d-block">4.3</b>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i>
                                <small class="text-muted d-block">Sudah Diberi Penilaian</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
        </div> <!-- End of Main Content -->
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
