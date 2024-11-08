<link href="{{ asset('css/LoginRegistro/cliente.css') }}" rel="stylesheet" />
<script src="{{asset('js/Validaciones/VerificacionPassword.js')}}" ></script>
<link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">


<div class="container">
    <div class="left-panel">
        <h1>¡Explora de nuestros creadores artesanales!</h1>
        <img src="{{ asset('imagen/logo.png') }}" class="profile-image" alt="Profile" />
    </div>

    <div class="right-panel">
        <div class="form-container">
            <h2>CREA TU CUENTA</h2>
            <form name="registro" action="{{ route('validar-registro') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                
                <div class="input-row">
                    <input id="nombre" name="nombre" placeholder="Nombre de usuario" required class="input" />
                    <select id="sexo" name="sexo" required class="input">
                        <option value="" disabled selected>Género</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>

                <!-- Fila: Nombre(s) y Apellido Paterno -->
                <div class="input-row">
                    <input id="name" name="name" placeholder="Nombre(s)" required class="input" />
                    <input id="paterno" name="paterno" placeholder="Apellido Paterno" required class="input" />
                </div>

                <!-- Fila: Apellido Materno y Fecha de Nacimiento -->
                <div class="input-row">
                    <input id="materno" name="materno" placeholder="Apellido Materno" required class="input" />
                    <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" placeholder="Fecha de Nacimiento" required class="input" />
                </div>

                <!-- Fila: Número de celular y Correo electrónico -->
                <div class="input-row">
                    <input id="telefono" name="telefono" type="tel" placeholder="Número de celular" required class="input" />
                    <input id="email" name="email" type="email" placeholder="Correo electrónico" required class="input" />
                </div>

                <!-- Fila: Ciudad/Comunidad y Preferencia -->
                <div class="input-row">
                    <select id="direccion" name="direccion" required class="input">
                        <option value="" disabled selected>Comunidad</option>
                        <option value="Achocalla">Achocalla</option>
                        <option value="San Bernardo">San Bernardo</option>
                        <option value="Comunidad A">Comunidad A</option>
                        <option value="Comunidad B">Comunidad B</option>
                    </select>

                    <select id="preferencia" name="preferencia" required class="input">
                        <option value="" disabled selected>Preferencia</option>
                        <option value="Ropa">Ropa</option>
                        <option value="Alimentos">Alimentos</option>
                        <option value="Artículos de Hogar">Artículos de Hogar</option>
                        <option value="Accesorios">Accesorios</option>
                    </select>
                </div>

                <!-- Fila: Contraseña y Confirmar Contraseña -->
                <input id="password" name="password" type="password" placeholder="Contraseña " required class="input" onkeyup="validatePassword()" />
                    <br />
                 <small id="passwordHelp" class="text-white"></small>
                <h3> Foto de Perfil</h3>
                <input  type="file" id="file" name="file" accept="image/*" class="input" >

                <button type="submit" class="btn">Crear Cuenta</button>
            </form>
        </div>
    </div>
</div>