<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Guilherme Viana é um Desenvolvedor Full Stack com experiência em...">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{  asset('site/img/rocket.png')  }}">
    <title>Guilherme Viana - Desenvolvedor Full Stack</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Knewave&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('site/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.css') }}">
</head>
<body>
@include('Elements.navbar')
<div class="content">
    @yield('content')
</div>
<div class="toast-container">
    <div id="toastAlert" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
        <div class="toast-header">
            <strong class="me-auto">Email Enviado</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Seu e-mail foi enviado com sucesso!
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('site/js/bootstrap.js')}}"></script>
<script src="{{ asset('site/js/custom.js') }}"></script>
</body>
</html>
