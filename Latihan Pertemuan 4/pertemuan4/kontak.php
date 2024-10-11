<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Kontak Anda</title>
    
</head>
<body>
    <h1 class="contact d-flex justify-content-center my-5">Contact Us</h1>
    <div class="container border rounded p-5">
      <h3>
        <b syle="font-size: 30px; align-self: center; display: flex;">Masukan</b>  
    </h3>
      <form action="formhandler.php" method="post">
        <div class="full-name mb-3">
          <label for="nama" class="form-label">Full name</label>
          <input type="textbox" class="form-control col-xs-3" placeholder="Type your fullname" name="fullname">
        </div>
        <div class="email mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="textbox" class="form-control" placeholder="Type your email" name="email">
          </div>
        <div id="jenis-kelamin">
          <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
          <div class="mb-3 form-check male">
            <input type="radio" class="form-check-input" name="gender[]" checked>
            <label class="form-check-label" for="male">Laki-laki</label>
          </div>
          <div class="mb-3 form-check female">
            <input type="radio" class="form-check-input" name="gender[]">
            <label class="form-check-label" for="female">Perempuan</label>
          </div>
        </div>
        <div id="hobi"> 
          <label for="hobi" class="form-label">Hobi</label>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="hobby[]">
            <label class="form-check-label" for="gambar">Gambar</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="hobby[]">
            <label class="form-check-label" for="Bersepeda">Bersepeda</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="hobby[]">
            <label class="form-check-label" for="Memasak">Memasak</label>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="hobby[]">
            <label class="form-check-label" for="Bermain game">Bermain game</label>
          </div>
          <div class="d-grid gap-2">
              <button type="submit" class="btn btn-primary d-flex align-items-center justify-content-center">Submit</button>
             <a href="kontak.html" class="btn btn-danger  d-flex align-items-center justify-content-center">Reset</a>
              <a href="dashboard.html" class="btn btn-secondary  d-flex align-items-center justify-content-center">Back to dashboard</a>
            
              
            </div>
        </div>
        </div>
      </form>
    </div>
    


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</html>