<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/PerfilUsuario.css')}}">
</head>

<body>
    <div class="container">
        <!-- Barra lateral -->
        <div class="sidebar">
            <h2 style="text-align: center;">Social</h2>
            <nav class="nav-links">
                <a href="{{route('Home')}}">Inicio</a>
                <a href="#">Convertirse En Artesano </a>
                <a href="#">Convertirse En Delivery</a>
                <a href="#">Notificaciones</a>
                <a href="#">Mensajes</a>
                <a href="#">Enlaces</a>
            </nav>
        </div>

        <!-- Contenido principal -->
        <div class="content">
            <div class="profile-header">
                <img src="{{asset('imagen/Perfil/img.png')}}" alt="Foto de Perfil">
                <div>
                    <h3>Nombre Alias : {{ $usuario->nombre}}</h3>
                    <p>564 Siguiendo · 1524 Seguidores</p>
                    <!-- Datos personales del artesano -->
                    <div class="personal-info">
                        <h4>Datos del Artesano</h4>
                        <div class="personal-info-content">
                            <p><strong>Nombre de Usuario : </strong>{{ $usuario->name}}</p>
                            <p><strong>Comunidad: </strong> {{ $usuario->direccion}}</p>
                            <p><strong>Correo Electronico :  </strong> {{ $usuario->email}}</p>
                            <!-- Botón Ver Más -->
                            <div class="ver-mas" onkeyup="Button()">
                                <a href="#" id="ver-mas-btn">Ver más</a>
                            </div>
                            <!-- Información expandible -->
                            <div class="extra-info" id="extra-info" style="display: none;">
                                <p><strong>Genero M(masculino)/F(femenino) : </strong>{{ $usuario->sexo}}</p>
                                <p><strong>Fecha de Nacimiento : </strong> {{ $usuario->fecha_nacimiento}}</p>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sección de Tweets o publicaciones -->
            <div class="tweet-box">
                <h4>¿Quieres Editar tu Perfil?</h4>
                    <div id="edit-profile-form" style="display: none;">
                        <form id="profile-form" action="{{ route('ActualizarPerfil') }}" method="POST" enctype="multipart/form-data">
                          @csrf   
                            <label for="nombre">Nombre Alias:</label>
                            <input type="text" id="nombre" name="nombre" value="">
                        
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="name" name="name" value="">

                            <label for="paterno">Paterno:</label>
                            <input type="text" id="paterno" name="paterno" value="">

                            <label for="materno">Materno:</label>
                            <input type="text" id="materno" name="materno" value="">

                            <label for="telefono">Número de Celular:</label>
                            <input type="text" id="telefono" name="telefono" value="">

                            <label for="direccion">Ciudad o Comunidad:</label>
                            <input type="text" id="direccion" name="direccion" value="">

                            <label for="password">Contraseña(opcional) :</label>
                            <input type="password" id="password" name="password">

                            <label for="email">Correo Electronico:</label>
                            <input type="text" id="email" name="email" value="">

                            <label for="profile-photo">Foto de Perfil(opcinal):</label>
                            <input type="file" id="profile-photo" name="profile-photo">

                            <button type="submit">Guardar Cambios</button>
                            <button type="button" id="cancel-btn">Cancelar</button>
                        </form>
                    </div>
                <button class="booton-A5"  id="edit-profile-btn">Editar Perfil</button>
            </div>

            <!-- Carrusel de productos -->
            <div class="tweet-box">
                <h4>Nombre de Usuario</h4>
                <div class="carousel">
                    <div class="carousel-images">
                        <img src="{{asset('imagen/Perfil/productoArtesanal1.jpg')}}" alt="Producto 1">
                        <img src="{{asset('imagen/Perfil/productoArtesanal2.jpg')}}" alt="Producto 2">
                        <img src="{{asset('imagen/Perfil/productoArtesanal3.jpg')}}" alt="Producto 3">
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
                    <img src="{{asset('imagen/Perfil/facebook.png')}}" alt="Facebook">
                    <span>@facebook</span>
                </div>
                <div class="follow-item">
                    <img src="{{asset('imagen/Perfil/tik-tok.png')}}" alt="TikTok">
                    <span>@tik-tok</span>
                </div>
                <div class="follow-item">
                    <img src="{{asset('imagen/Perfil/whatsapp.png')}}" alt="WhatsApp">
                    <span>@whatsapp</span>
                </div>
                <div class="follow-item">
                    <img src="{{asset('imagen/Perfil/instagram.png')}}" alt="Instagram">
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

         // Muestra el formulario cuando se presiona "Editar Perfil"
         document.getElementById('edit-profile-btn').addEventListener('click', function () {
            document.getElementById('edit-profile-form').style.display = 'block';
            document.getElementById('edit-profile-btn').style.display = 'none';
        });

        // Oculta el formulario cuando se presiona "Cancelar"
        document.getElementById('cancel-btn').addEventListener('click', function () {
            document.getElementById('edit-profile-form').style.display = 'none';
            document.getElementById('edit-profile-btn').style.display = 'block';
        });
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