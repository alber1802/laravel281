<html lang="en">
<head>
    <title>verificacion del Gmail</title>
    <link rel="stylesheet" href="{{asset('css/VerificacionToken.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- HEADER -->
   <header class="header">
    <nav class="navbar">
        <a href="{{route('Home')}}">Inicio</a>
        <a href="{{route('nosotros')}}">Nosotros</a>
          
          <a href="{{route('contactanos')}}">Contáctanos</a>
    </nav>
    
   </header>
    <!-- LOGIN -->
    <div class="background"></div>
    <div class="container">
        <div class="item">
            
            <div class="text-item">
                <h2>¡YA FALTA POCO ! <br><span>
                Te hemos enviado un código de verificación. Introduce el código para acceder a tu cuenta.
                </span></h2>
                <p>Asegurate de haber colocado al direccion de correo correspondiente.</p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-tiktok'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form action="{{ route('verificar.token') }}" method="POST">
                    <h2>Verificacion de Token</h2>
                     @csrf
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user-account'></i></span>
                        <input type="number" name="codigo"id="codigo" placeholder="Código de verificación">
                    </div>         
                    <button type="submit" class="register-link">Verificar</button>
                    
                </form>
            </div>
            <!-- HEADER
            <div class="form-box register">
                <form action="">

                    <h2>Verficacion de Token </h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" required>
                        <label >Ingresa el Codigo .. </label>
                    </div>    
                    <button class="login-link">Verificar</button>
                    
                </form>
            </div> -->
        </div>
    </div>
    
</body>
</html>
