<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Cadastro Clínico SENAC</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Estilo Personalizado -->
    <style>
    :root {
        --verde-principal: #198754;
        --verde-claro: #20c997;
        --verde-hover: #157347;
        --verde-suave: #eafaf3;
        --branco: #ffffff;
        --cinza-claro: #f8f9fa;
    }

    body {
        background-color: var(--cinza-claro);
    }

    .bg-verde {
        background: linear-gradient(90deg,
                var(--verde-principal),
                var(--verde-claro));
    }

    .nav-link {
        color: white !important;
        font-weight: 500;
        transition: .3s;
    }

    .nav-link:hover {
        color: #d1f5e0 !important;
    }

    footer {
        font-size: 15px;
    }

    /* Cards */
    .card {
        border: none;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,.08);
    }

    .card-header {
        background: var(--verde-suave);
        color: var(--verde-principal);
        font-weight: bold;
        border-bottom: 1px solid #d7f2e3;
    }

    /* Botões principais */
    .btn-primary,
    .btn-success {
        background-color: var(--verde-principal);
        border-color: var(--verde-principal);
    }

    .btn-primary:hover,
    .btn-success:hover {
        background-color: var(--verde-hover);
        border-color: var(--verde-hover);
    }

    /* Botões secundários */
    .btn-outline-primary {
        color: var(--verde-principal);
        border-color: var(--verde-principal);
    }

    .btn-outline-primary:hover {
        background-color: var(--verde-principal);
        color: white;
    }

    /* Campos de formulário */
    .form-control:focus,
    .form-select:focus {
        border-color: var(--verde-claro);
        box-shadow: 0 0 0 .2rem rgba(25,135,84,.25);
    }

    /* Tabelas */
    .table thead {
        background-color: var(--verde-principal);
        color: white;
    }

    /* Links */
    a {
        color: var(--verde-principal);
    }

    a:hover {
        color: var(--verde-hover);
    }
</style>
</head>

<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Cabeçalho -->
    <header class="bg-verde text-white py-3">
        <div class="container">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

                <h1 class="h3 mb-3 mb-md-0">
                    <i class="bi bi-hospital"></i>
                    Cadastro Clínico SENAC
                </h1>

                <!-- Menu principal -->
                <nav class="d-flex gap-2">

                    <a href="index.php?page=agenda" class="btn btn-menu">
                        <i class="bi bi-calendar-week"></i>
                        Agenda
                    </a>

                    <a href="index.php?page=cliente" class="btn btn-menu">
                        <i class="bi bi-people-fill"></i>
                        Cliente
                    </a>

                    <a href="index.php?page=medico" class="btn btn-menu">
                        <i class="bi bi-person-badge-fill"></i>
                        Médico
                    </a>

                </nav>
                </nav>

            </div>

        </div>
    </header>

    <!-- Conteúdo carregado pelas rotas -->
    <main class="flex-grow-1">

        <?php
        require __DIR__ . "/routes.php";
        ?>

    </main>

    <!-- Rodapé -->
    <footer class="bg-verde text-white text-center py-3">
        <p class="mb-0">
            <i class="bi bi-heart-pulse-fill"></i>
            Cadastro Clínico SENAC © 2026
        </p>
    </footer>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>