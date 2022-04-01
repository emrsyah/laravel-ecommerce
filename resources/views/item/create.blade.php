<!-- 
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins';
        }
    </style>
</head>
<body>
<!-- if validation in the controller fails, show the errors -->
@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>

<form action="{{ route('item.store') }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="">
        <p class="m-1">Nama Produk</p>
        <input type="text" class="" name="nama" required>
    </div>
    <div class="">
        <p>Deskripsi Produk</p>
        <input type="text" class="" name="deskripsi" required>
    </div>
    <div class="">
        <p>Gambar</p>
        <input type="file" name="file" required>
    </div>
    <button type="submit">Submit</button>
</form>

</div>
</body>
</html>