<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Animated Signup Form</title>
    <link rel="stylesheet" href="{{asset('css/LoginRegistro/ArtesanoRegistro.css')}}">
</head>
<body>
<div class="background"></div>
    <div class="fondo">
    <div class="container">
        <div class="side left-side" id="leftSide">
            <h1>Se un Artesano y vende los Productos de tu Comunidad</h1>
            <div class="profile-pic">
                 <a href="{{ route('Home') }}"><img src="{{ asset('imagen/logo.png') }}"  alt="Profile picture"></a>  
            </div>
        </div>
        <div class="side right-side">
            <h2>Crear Tu Cuenta de Artesano </h2>
            <form name="registro" action="{{ route('validar-registroA') }}" method="POST"  enctype="multipart/form-data" >
                    @csrf
                <div class="form-row">
                    <input id="nombre" name="nombre" placeholder="Nombre de Pila" required class="input" />
                    <input id="name" name="name" placeholder="Nombre" required class="input" />
                </div>
                <div class="form-row">
                    <input id="paterno" name="paterno" placeholder="Apellido Paterno" required class="input" />
                    <input id="materno" name="materno" placeholder="Apellido Materno" required class="input" />
                </div>
                <div class="form-row">
                    <input id="email" name="email" type="email" placeholder="Correo Electronico" required class="input" />
                    <input id="direccion" name="direccion"  placeholder="Donde Vives?" required class="input" />
                </div>
                <div class="form-row">
                        <select id="sexo" name="sexo" required class="input">
                             <option value="" disabled selected>Selecciona tu Genero</option>
                             <option value="M">Masculino</option>
                             <option value="F">Femenino</option>
                        </select>
                        <input id="fecha_nacimiento" name="fecha_nacimiento" type="date" required class="input" />
                </div>
                <div class="form-row">
                    <select id="ciudad" name="ciudad" required class="input" onchange="filterCommunities()" require>
                        <option value="" disabled selected>Seleccione tu Ciudad</option>
                        <option value="La Paz">La Paz</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Beni">Beni</option>
                        <option value="Pando">Pando</option>
                        <option value="Tarija">Tarija</option>
                        <option value="Chuquisaca">Chuquisaca</option>
                        <option value="Oruro">Oruro</option>
                        <option value="Potosí">Potosí</option>
                    </select>
                    
                    <select id="nombreCo" name="nombreCo" required class="input" require>
                        <option value="" disabled selected>Selecciona Tu comunidad</option>
                    </select>
                </div>

                <input id="telefono" name="telefono" type="tel" placeholder="Numero de Celular " required class="input" />
                <div class="form-row">
                    <input id="password" name="password" type="password" placeholder="Contraseña " required class="input" onkeyup="validatePassword()" />
                    <br />
                    <small id="passwordHelp" class="text-white"></small>
              </div>
                <input id="especialidadA" name="especialidadA"  placeholder="Cual es tu Especialidad " required class="input" />
                <input id="descripcionA" name="descripcionA"  placeholder="Describete en pocas palabras" required class="input" />
                <input  type="file" id="file" name="file" accept="image/*" class="input">
                <button type="submit">Registra el Artesano</button>
            </form>
            <p>Ya Tienes una Cuenta Creada? <a href="{{route('login')}}" style="color: #e1b382;">Iniciar Sesion!</a></p>
    </div>
    </div>
    <script src="{{asset('js/LoginRegistro/Artesano.js')}}"></script>
    <script src="{{asset('js/Validaciones/VerificacionPassword.js')}}" ></script>
    <script>
        function filterCommunities() {
            var ciudadSelect = document.getElementById('ciudad');
            var comunidadSelect = document.getElementById('nombreCo');
            var selectedCity = ciudadSelect.value;

            // Reiniciar el select de comunidades
            comunidadSelect.innerHTML = '<option value="" disabled selected>Selecciona Tu comunidad</option>';

            // Obtener todas las opciones de comunidad
            var comunidades = [

                // LA PAZ
                { name: "Kallawaya", ciudad: "La Paz" },
                { name: "Los Yungas", ciudad: "La Paz" },
                { name: "Uru Chipaya", ciudad: "La Paz" },
                { name: "Tiwanaku", ciudad: "La Paz" },
                { name: "Laja", ciudad: "La Paz" },
                { name: "Sorata", ciudad: "La Paz" },
                { name: "Achacachi", ciudad: "La Paz" },
                { name: "Palca", ciudad: "La Paz" },

                // COCHABAMBA
                { name: "Quechua", ciudad: "Cochabamba" },
                { name: "Ayopaya", ciudad: "Cochabamba" },
                { name: "Chapare", ciudad: "Cochabamba" },
                { name: "Valle Alto", ciudad: "Cochabamba" },
                { name: "Mizque", ciudad: "Cochabamba" },
                { name: "Sacaba", ciudad: "Cochabamba" },
                { name: "Independencia", ciudad: "Cochabamba" },
                { name: "Punata", ciudad: "Cochabamba" },
                { name: "Tiraque", ciudad: "Cochabamba" },
                { name: "Anzaldo", ciudad: "Cochabamba" },

                // SANTA CRUZ
                { name: "Guaraní", ciudad: "Santa Cruz" },
                { name: "Chiquitana", ciudad: "Santa Cruz" },
                { name: "Ayoreo", ciudad: "Santa Cruz" },
                { name: "Montereña", ciudad: "Santa Cruz" },
                { name: "Vallegrande", ciudad: "Santa Cruz" },
                { name: "San Ignacio", ciudad: "Santa Cruz" },
                { name: "Samaipata", ciudad: "Santa Cruz" },
                { name: "Paurito", ciudad: "Santa Cruz" },
                { name: "Okinawa", ciudad: "Santa Cruz" },
                { name: "Buena Vista", ciudad: "Santa Cruz" },

                // BENI
                { name: "Moxeña", ciudad: "Beni" },
                { name: "Movima", ciudad: "Beni" },
                { name: "Chimán", ciudad: "Beni" },
                { name: "Itonama", ciudad: "Beni" },
                { name: "Sirionó", ciudad: "Beni" },
                { name: "Canichana", ciudad: "Beni" },
                { name: "Yuracaré", ciudad: "Beni" },
                { name: "Baure", ciudad: "Beni" },
                { name: "Trinitaria", ciudad: "Beni" },
                { name: "Cavineña", ciudad: "Beni" },

                // PANDO
                { name: "Pacahuara", ciudad: "Pando" },
                { name: "Chácobo", ciudad: "Pando" },
                { name: "Esse Ejja", ciudad: "Pando" },
                { name: "Tacana", ciudad: "Pando" },
                { name: "Bella Flor", ciudad: "Pando" },
                { name: "Puerto Rico", ciudad: "Pando" },
                { name: "Filadelfia", ciudad: "Pando" },
                { name: "San Pedro", ciudad: "Pando" },
                { name: "Sena", ciudad: "Pando" },
                { name: "Nueva Esperanza", ciudad: "Pando" },

                // TARIJA
                { name: "Tomatitas", ciudad: "Tarija" },
                { name: "San Lorenzo", ciudad: "Tarija" },
                { name: "El Puente", ciudad: "Tarija" },
                { name: "Yunchará", ciudad: "Tarija" },
                { name: "Iscayachi", ciudad: "Tarija" },
                { name: "Padcaya", ciudad: "Tarija" },
                { name: "Chiquiacá", ciudad: "Tarija" },
                { name: "Entre Ríos", ciudad: "Tarija" },
                { name: "Caraparí", ciudad: "Tarija" },

                // CHUQUISACA
                { name: "Tarabuco", ciudad: "Chuquisaca" },
                { name: "Yamparáez", ciudad: "Chuquisaca" },
                { name: "Zudáñez", ciudad: "Chuquisaca" },
                { name: "Mojocoya", ciudad: "Chuquisaca" },
                { name: "Icla", ciudad: "Chuquisaca" },
                { name: "Presto", ciudad: "Chuquisaca" },
                { name: "Villa Serrano", ciudad: "Chuquisaca" },
                { name: "Padilla", ciudad: "Chuquisaca" },
                { name: "Muyupampa", ciudad: "Chuquisaca" },
                { name: "Monteagudo", ciudad: "Chuquisaca" },

                // ORURO
                { name: "Challapata", ciudad: "Oruro" },
                { name: "Huanuni", ciudad: "Oruro" },
                { name: "Poopó", ciudad: "Oruro" },
                { name: "Caracollo", ciudad: "Oruro" },
                { name: "Machacamarca", ciudad: "Oruro" },
                { name: "Orinoca", ciudad: "Oruro" },
                { name: "Sabaya", ciudad: "Oruro" },
                { name: "Huari", ciudad: "Oruro" },
                { name: "Curahuara de Carangas", ciudad: "Oruro" },
                { name: "Salinas de Garci Mendoza", ciudad: "Oruro" },

                // POTOSI
                { name: "Uyuni", ciudad: "Potosí" },
                { name: "Betanzos", ciudad: "Potosí" },
                { name: "Tupiza", ciudad: "Potosí" },
                { name: "Cotagaita", ciudad: "Potosí" },
                { name: "Villazón", ciudad: "Potosí" },
                { name: "San Pedro de Quemes", ciudad: "Potosí" },
                { name: "Atocha", ciudad: "Potosí" },
                { name: "San Antonio", ciudad: "Potosí" },
                { name: "Sacaca", ciudad: "Potosí" }

                // Agrega más comunidades aquí
            ];

            // Filtrar comunidades por ciudad seleccionada
            comunidades.forEach(function(comunidad) {
                if (comunidad.ciudad === selectedCity) {
                    var option = document.createElement('option');
                    option.value = comunidad.name;
                    option.textContent = comunidad.name;
                    comunidadSelect.appendChild(option);
                }
            });
        }
        </script>

</body>
</html>
