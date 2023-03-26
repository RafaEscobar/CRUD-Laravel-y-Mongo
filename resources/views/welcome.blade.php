<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body class="container">
    <h1 class="mt-3 my-5">Lenguajes de programación y frameworks más usados</h1>
    <div class="row">
        @foreach ($blog as $item)
        <div class="col my-3">
            <div class="card" style="width: 14rem;">
                <img src="{{$item->img}}" class="card-img-top p-4" alt="..." height="200">
                <div class="card-body">
                  <h5 class="card-title">{{$item->nombre}}</h5>
                  <p class="card-text">{{$item->descripcion}}</p>
                </div>
              </div>
            </div>
        @endforeach
    </div>
</body>
</html>