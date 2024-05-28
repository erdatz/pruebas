<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
        .login-container {
            display: flex;
            height: 100vh;
            align-items: stretch;
        }
        .login-image {
            background: url('{{ asset('images/hero.jpg') }}') no-repeat center center;
            background-size: cover;
            flex: 1;
        }
        .login-form-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
            padding: 2rem;
        }
        .login-form {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-logo {
            display: block;
            margin: 0 auto 1rem;
            max-width: 150px;
        }
        .btn-custom {
            background-color: #d9534f;
            border-color: #d9534f;
            color: white;
        }
        .btn-custom:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }
    </style>
    <title>Login</title>
</head>
<body>
<div class="login-container">
    <div class="login-image d-none d-md-block"></div>
    <div class="login-form-container">
        <div class="login-form">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="login-logo">
            <h2 class="text-center">Iniciar Sesión</h2>
            <p class="text-center">Ingrese sus credenciales</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre_usuario">Usuario</label>
                    <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                </div>
                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" class="btn btn-custom btn-block">Ingresar</button>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
