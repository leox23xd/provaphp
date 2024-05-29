<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação Laravel')</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="https://www.carneirosuplementos.com.br/wp-content/uploads/2022/09/logo-nova.png" alt="Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/proteinas') }}">Proteínas</a></li>
                    <li><a href="{{ url('/aminoacidos') }}">Aminoácidos</a></li>
                    <li><a href="{{ url('/pre-treino') }}">Pré-Treino</a></li>
                </ul>
            </nav>
            <div class="profile-icon">
               
                <a href="{{ url('/perfil') }}">
                    <img src="https://cdn-icons-png.flaticon.com/512/8847/8847137.png" alt="Perfil">
                </a>
            </div>
        </div>
    </header>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
