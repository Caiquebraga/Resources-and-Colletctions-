<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Escolar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
  <style>
    /* Navbar estilizada */
    .navbar-custom {
      background-color: #007bff;
      color: #fff;
    }
    .navbar-custom a.navbar-brand, .navbar-custom a.nav-link {
      color: #fff !important;
    }

    /* Sidebar */
    .sidebar {
      background-color: #f8f9fa;
      padding: 1rem;
      min-height: 100vh;
      border-right: 1px solid #ddd;
    }
    .sidebar .list-group-item {
      border: none;
      padding: 10px 15px;
      color: #007bff;
    }
    .sidebar .list-group-item:hover {
      background-color: #e2e6ea;
      color: #0056b3;
    }

    /* Área de Conteúdo com Imagem de Fundo */
    .content {
      padding: 20px;
      background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b'); /* Link da imagem */
      background-size: cover;
      background-position: center;
      min-height: 100vh;
      color: #333;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .content h1 {
      font-size: 2.5rem;
      color: #fff;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
    .content p {
      color: #f8f9fa;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Escolar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Alunos</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('turma') }}">Classes</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Notas</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Configurações</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar d-none d-md-block">
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item">Dashboard</a>
        <a href="#" class="list-group-item">Alunos</a>
        <li class="nav-item"><a class="nav-link" href="{{ route('turma') }}">Classes</a></li>
        <a href="#" class="list-group-item">Notas</a>
        <a href="#" class="list-group-item">Configurações</a>
      </div>
    </div>

    <!-- Content Area -->
    <div class="col-md-10 content">
      <h1 class="mt-4">Bem-vindo ao Sistema Escolar</h1>
      <p class="lead">Gerencie alunos, classes e notas de forma eficiente.</p>
      <!-- Conteúdo dinâmico aqui -->
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
