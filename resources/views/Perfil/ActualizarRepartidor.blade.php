<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Pefil Cliente</title>
    <link rel="stylesheet" href="{{asset('css/Perfil/ActualizarRepartidor.css')}}">
    <link rel="shortcut icon" href="{{asset('imagen/logo.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('imagen/logo.png')}}">
</head>
<body>
<div class="container">
  <div class="heading">Actualizar Datos de Usuario</div>
  <form class="form" id="profile-form" action="{{route('ActualizarPerfil')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <input placeholder="Apodo(Alias)"  type="text" id="nombre" name="nombre"  class="input">
            <input placeholder="Nombre Usuario" type="text" id="name" name="name" class="input"/>
        </div>
        <div class="row">
            <input placeholder="Paterno" type="text" id="paterno" name="paterno"  class="input"/>
            <input placeholder="Materno" type="text" id="materno" name="materno" class="input"/>
        </div>
        <div class="row">
            <input placeholder="Numero Celular" type="text" id="telefono" name="telefono" class="input"/>
            <input placeholder="Donde vives? Especifica" type="text" id="direccion" name="direccion" class="input"/>
        </div>
        
        <select id="sexo" name="sexo"  class="input">
                        <option value="" disabled selected>Selecciona tu Genero</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
         </select>
      
        <input placeholder="Correo electronico" id="email" name="email" type="email" class="input"/>
        <input placeholder="Password" id="password" name="password" type="password" class="input" />

        <span class="forgot-password"><a href="#">Imagen de perfil</a></span>
        <input placeholder="Password" type="file" id="file" name="file" accept="image/*"  class="input" color='black'>

        <input value="Actualizar" type="submit" class="login-button" />
        <a href="{{route('validar-registro')}}"><input value="Cancelar" type="submit" class="login-button" /></a>
        
  </form>
  
  
</div>
<div class="container">
  <div class="heading">Actualizar Datos de Vehiculo </div>
  <form class="form" id="profile-form"  action="{{route('ActualizarRepartidor')}}"  method="POST">
    @csrf
        <div class="row">
            <input id="modeloV" name="modeloV" placeholder="Modelo"  class="input" />
            <input id="placaV" name="placaV" placeholder="Placa"  class="input" />
        </div>
        <div class="row">
            <input id="colorV" name="colorV" placeholder="Color" class="input" />
                    <select id="tipoV" name="tipoV"class="input">
                        <option value="" disabled selected>Tipo de Vehículo</option>
                        <option value="Moto">Moto</option>
                        <option value="Auto">Auto</option>
                    </select>
        </div>
        <div class="row">
         <select id="disponibilidadR" name="disponibilidadR"class="input">
            <option value="" disabled selected>Disponibilidad </option>
             <option value="1">Tiempo Completo</option>
             <option value="2">Medio Tiempo</option>
        </select>
           
        </div>
        <input value="Actualizar" type="submit" class="login-button" />
           
  </form>
  
</div>


</body>
</html>