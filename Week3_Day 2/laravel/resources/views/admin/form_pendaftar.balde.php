<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Pendaftaran Event form</h2>
  <form>
    <div class="form-group">
      <label for="email">Nama : </label>
      <input type="email" class="form-control" id="email" placeholder="Nama" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Email : </label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
   <!--  <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <a class="btn btn-primary" href="index.html">Submit</a>
  </form>
</div>

</body>
</html>
