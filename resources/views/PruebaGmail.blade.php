<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link ="" />
    <title>Document</title>
    <style>
        body{
            background-color: #012353;
            }
    </style>
</head>
<body>
    <div class="contener">
        <div class="row">
            <div class="col">
                <h1>Subir imagen</h1>
                <div class="card">
                    <div class="card-body">
                        <form action= "{{route('createfile')}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                 <input type="file" name="file" id="file" accept="image/*">
                            </div>
                         <button type="submit" class="btn btn-primary"">Subir Imagen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>