<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
      <h4 class="mb-3 text-center">Login</h4>
      <form method="POST" action="../actions/login.php">
        <div class="mb-3">
          <label for="femail" class="form-label">Email</label>
          <input type="email" class="form-control" id="femail" name="femail" required>
        </div>
        <div class="mb-3">
          <label for="fpassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="fpassword" name="fpassword" required>
        </div>
        <button type="submit" name="sub" class="btn btn-primary w-100">Login</button>
        <a href="register.php">Cadastrar</a>
      </form>
    </div>
  </div>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>