<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Marketing</title>
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: purple;
        }
        p {
            line-height: 1.6;
        }
        .social-links a {
            color: purple;
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Email Marketing</h2>
    <p>Obrigado por entrar em contato, {{ $details['nome'] }}!</p>
    <p><strong>Assunto:</strong> {{ $details['title'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $details['body'] }}</p>

    <p>Siga-nos nas redes sociais:</p>
    <div class="social-links">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
    </div>
</div>
</body>
</html>
