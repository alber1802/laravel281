<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Título de la Página</title>
    <style>
        /* Fondo azul oscuro */
        body {
            background-color: #017598; 
            color: white; 
        }


        .qr-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            min-height: 100vh;
        }


        .qr-code {
            width: 200px; 
            height: 200px;
        }


        .img-fluid {
            max-width: 80%; 
            height: auto;
        }


        .button {
            display: inline-block;
            padding: .75rem 1.25rem;
            border-radius: 10rem;
            color: #fff; 
            text-transform: uppercase;
            font-size: 1rem;
            letter-spacing: .15rem;
            transition: all .3s;
            position: relative;
            overflow: hidden;
            z-index: 1;
            background-color: #ffc107;
        }

        .button:hover {
            background-color: #e0a800;
        }


        * {
            font-family: Arial;
            text-decoration: none;
            font-size: 20px;
        }

        .container {
            padding-top: 50px;
            margin: 0 auto;
            width: 100%;
            text-align: center;
        }

        span {
            display: block;
            margin-top: 2rem;
            font-size: .7rem;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container qr-container">

        <h1 class="fw-bold mb-4 mt-2 pt-1">Escanea para pagar</h1>

        <div class="row mb-4 justify-content-center">
            <div class="col-4 text-center">
                <img src="{{ asset('imagen/payment-icon/1.png') }}" alt="Descripción de la imagen" class="img-fluid">
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('imagen/payment-icon/2.png') }}" alt="Descripción de la imagen" class="img-fluid">
            </div>
            <div class="col-4 text-center">
                <img src="{{ asset('imagen/payment-icon/5.png') }}" alt="Descripción de la imagen" class="img-fluid">
            </div>
        </div>

        <h5 class="curved-text fw-bold">y más...</h5>

        <div class="my-4">
            @if($qr)

                <div class="qr-code">
                    {!! DNS2D::getBarCodeHTML("$qr->pago_codigo", 'QRCODE') !!}
                </div>
            @else
                <p>No hay código QR disponible para mostrar.</p>
            @endif
        </div>

        <h3>Por favor, escanea el código QR para completar tu pago.</h3>
        
        <div class="container">
            <h4>Asegurate de confirmar tu pedido</h4>
            <a href="{{ route('carrito.mostrar') }}" class="button">VOLVER</a>
            <span>COMMCRAFT.COM</span>
        </div>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>