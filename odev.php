<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container d-flex justify-content-center" style="padding-top: 140px">
    <form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label></br>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Telefon</label></br>
        <input type="text" class="form-control" id="telefon" placeholder="Telefon">
    </div>

    <select class="form-select form-select-lg" aria-label=".form-select-lg">
                <option selected>Cinsiyetiniz</option>
                <option value="E">Erkek</option>
                <option value="K">Kadın</option>
    </select></br>
    
    <select class="form-select form-select-lg" aria-label=".form-select-lg">
                <option selected>Ders Seçiniz</option>
                <option value="1">Yazılım Mimarileri</option>
                <option value="2">Web Programlama</option>
                <option value="2">Sunucu İşletim Sistemleri</option>
    </select></br>
    
    <div class="mb-4">
                <label for="FormMesajiniz" class="form-label">Mesajınız</label></br>
                <textarea class="form-control" id="FormMesajiniz" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
    </div>
</body>
</html>