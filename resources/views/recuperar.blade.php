<link href="{{ asset('css/recuperar.css') }}" rel="stylesheet" />
<div class="container">
    <header>
        <h2>E-commerce</h2>
    </header>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Página</a>
        <a href="#">Sobre Nosotros</a>
        <a href="#">Contacto</a>
    </nav>
    <main>
        <div class="icon">
            <img class="gilf" src="https://cdn.templates.unlayer.com/assets/1680070159263-97399-email.gif" alt="gif" />
        </div>
        <h1>Verifique su dirección de correo electrónico</h1>
        <p>Se ha enviado un código de verificación a <strong>"
            
        </strong></p>

        <!-- Formulario de verificación -->
        <form class="verification-form" action="#" method="POST">
            @csrf
            <div class="code-input">
                <input type="text" name="code[1]" maxlength="1" required />
                <input type="text" name="code[2]" maxlength="1" required />
                <input type="text" name="code[3]" maxlength="1" required />
                <input type="text" name="code[4]" maxlength="1" required />
                <input type="text" name="code[5]" maxlength="1" required />
                <input type="text" name="code[6]" maxlength="1" required />
            </div>
            <button type="submit">Verificar</button>
        </form>

        <div class="options">
            <a href="#">Reenviar código</a>
            <a href="#">Cambiar correo</a>
        </div>
    </main>

    <footer>
        <p>¡Gracias por su apoyo! 😊</p>
        <p>Agradecemos tu paciencia y tu confiabilidad.</p>
        <p>Contáctenos si tiene alguna pregunta o algún problema con el código.</p>
        <div class="social-icons">
            <a href="#"><img class="facebook" src="https://cdn.tools.unlayer.com/social/icons/rounded/facebook.png" alt="facebook" /></a>
            <a href="#"><img class="twitter" src="https://cdn.tools.unlayer.com/social/icons/rounded/twitter.png" alt="twitter" /></a>
        </div>
        <p>
            <a href="#">DARSE DE BAJA</a> | 
            <a href="#">POLÍTICA DE PRIVACIDAD</a> | 
            <a href="#">WEB</a>
        </p>
    </footer>
</div>
