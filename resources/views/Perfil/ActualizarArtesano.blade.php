<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizacion de Perfil</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/ActualizarArtesano.css')}}">
</head>
<body>
    <div class="container">
        <!-- Formulario -->
        <div class="form-section">
             <form name="registro" action="{{ route('ActualizarArtesano') }}" method="POST"  enctype="multipart/form-data" >
                @csrf
                <h2>Actualizar datos de Artesano</h2>
                <!-- Fila para Apodo y Nombre -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="alias">Apodo (Alias)</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu apodo">
                    </div>
                    <div class="form-group">
                        <label for="firstName">Nombre</label>
                        <input type="text" id="name" name="name" placeholder="Ingresa tu nombre">
                    </div>
                </div>

                <!-- Fila para Apellido Paterno y Apellido Materno -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="paterno">Apellido Paterno</label>
                        <input type="text" id="paterno" name="paterno" placeholder="Ingresa tu apellido paterno">
                    </div>
                    <div class="form-group">
                        <label for="materno">Apellido Materno</label>
                        <input type="text" id="materno" name="materno" placeholder="Ingresa tu apellido materno">
                    </div>
                </div>

                <!-- Fila para Sexo y Comunidad -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo">
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comunidad">Comunidad</label>
                        <select id="nombreCo" name="nombreCo">
                            <option value="La Paz">La Paz</option>
                            <option value="Cochabamba">Cochabamba</option>
                            <option value="Santa Cruz">Santa Cruz</option>
                            <option value="Oruro">Oruro</option>
                            <option value="Sucre">Sucre</option>
                            <option value="Potosí">Potosí</option>
                            <option value="Tarija">Tarija</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección (Lugar donde vives)</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Ingresa tu dirección">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="paterno">Tu Especialidad</label>
                        <input type="text" id="especialidadA" name="especialidadA"  placeholder="Cual es tu Especialidad ">
                    </div>
                    <div class="form-group">
                        <label for="materno">Numero de Celular</label>
                        <input type="text" id="telefono" name="telefono" type="tel" placeholder="Numero de Celular ">
                    </div>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" placeholder="Describe tu experiencia o información adicional"></textarea>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo electrónico">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" placeholder="Ingresa tu contraseña">
                </div>
                <div class="form-group file-upload">
                    <label for="imagen">Foto de Perfil</label>
                    <input type="file" id="imagen" accept="image/*">
                </div>

                <!-- Botones de Actualizar y Cancelar -->
                <div class="buttons">
                    <button type="button" class="btn-cancel">Cancelar</button>
                    <button type="submit">Actualizar</button>
                </div>
            </form>
        </div>
    
    </div>
</body>
</html>
