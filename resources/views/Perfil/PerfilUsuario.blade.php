<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño de Perfil Social</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/PerfilUsuario.css')}}">
</head>

<body>
    <div class="container">
        <!-- Barra lateral -->
        <div class="sidebar">
            <h2 style="text-align: center;">Social</h2>
            <nav class="nav-links">
                <a href="#">Inicio</a>
                <a href="#">Perfil</a>
                <a href="#">Explorar</a>
                <a href="#">Notificaciones</a>
                <a href="#">Mensajes</a>
                <a href="#">Enlaces</a>
            </nav>
        </div>

        <!-- Contenido principal -->
        <div class="content">
            <div class="profile-header">
                <img src="imagen/Perfil/img.png" alt="Foto de Perfil">
                <div>
                    <h3>Nombre de Usuario</h3>
                    <p>564 Siguiendo · 1524 Seguidores</p>
                    <!-- Datos personales del artesano -->
                    <div class="personal-info">
                        <h4>Datos del Artesano</h4>
                        <div class="personal-info-content">
                            <p><strong>Nombre:</strong> -----</p>
                            <p><strong>Edad:</strong> -----</p>
                            <p><strong>Nivel Académico:</strong> -----</p>
                            <!-- Botón Ver Más -->
                            <div class="ver-mas" onkeyup="Button()">
                                <a href="#" id="ver-mas-btn">Ver más</a>
                            </div>
                            <!-- Información expandible -->
                            <div class="extra-info" id="extra-info" style="display: none;">
                                <p><strong>Género:</strong> ------</p>
                                <p><strong>Ubicación:</strong> -----</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Tweets o publicaciones -->
            <div class="tweet-box">
                <h4>¿Qué está pasando?</h4>
                <p>"Descubre la magia de lo hecho a mano: cada pieza cuenta una historia única, creada con pasión y
                    dedicación. Lleva a casa más que un producto, ¡lleva arte y tradición!"</p>
                <button>Editar Perfil</button>
            </div>

            <!-- Carrusel de productos -->
            <div class="tweet-box">
                <h4>Nombre de Usuario</h4>
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="imagen/Perfil/producto artesanal 1.jpg" alt="Producto 1">
                        <img src="imagen/Perfil/producto artesanal 2.jpg" alt="Producto 2">
                        <img src="imagen/Perfil/producto artesanal 3.jpg" alt="Producto 3">
                    </div>
                    <button class="prev">&#10094;</button>
                    <button class="next">&#10095;</button>
                </div>
            </div>
        </div>

        <!-- Barra de Tendencias y Seguimiento -->
        <div class="trending">
            <h2>Tendencias para ti</h2>
            <div class="trends">
                <div class="trend-item">
                    <span>#AlgunaTendencia</span>
                </div>
                <div class="trend-item">
                    <span>#OtraTendencia</span>
                </div>
                <div class="trend-item">
                    <span>#NuevaTendencia</span>
                </div>
                <div class="show-more">
                    <a href="#">Mostrar más</a>
                </div>
            </div>
            <h2>A quién seguir</h2>
            <div class="who-to-follow">
                <div class="follow-item">
                    <img src="imagen/Perfil/facebook.png" alt="Facebook">
                    <span>@facebook</span>
                </div>
                <div class="follow-item">
                    <img src="imagen/Perfil/tik-tok.png" alt="TikTok">
                    <span>@tik-tok</span>
                </div>
                <div class="follow-item">
                    <img src="imagen/Perfil/whatsapp.png" alt="WhatsApp">
                    <span>@whatsapp</span>
                </div>
                <div class="follow-item">
                    <img src="imagen/Perfil/instagram.png" alt="Instagram">
                    <span>@instagram</span>
                </div>
                <div class="show-more">
                    <a href="#">Mostrar más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script para expandir la información -->
    <script >
        // Carrusel
        document.addEventListener('DOMContentLoaded', function () {
            const prevButton = document.querySelector('.carousel .prev');
            const nextButton = document.querySelector('.carousel .next');
            const carouselImages = document.querySelector('.carousel-images');
            const images = carouselImages.querySelectorAll('img');
            let index = 0;

            function updateCarousel() {
                const offset = -index * 100;
                carouselImages.style.transform = `translateX(${offset}%)`;
            }

            prevButton.addEventListener('click', function () {
                index = (index > 0) ? index - 1 : images.length - 1;
                updateCarousel();
            });

            nextButton.addEventListener('click', function () {
                index = (index < images.length - 1) ? index + 1 : 0;
                updateCarousel();
            });

            updateCarousel(); // Inicializa el carrusel en la primera imagen
        });
        document.getElementById('ver-mas-btn').addEventListener('click', function (e) {
            e.preventDefault();
            const extraInfo = document.getElementById('extra-info');
            if (extraInfo.style.display === 'none') {
                extraInfo.style.display = 'block';
                this.textContent = 'Ver menos';
            } else {
                extraInfo.style.display = 'none';
                this.textContent = 'Ver más';
            }
        });

    </script>
    
    
</body>

</html>