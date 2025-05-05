<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #E0F7F5;
    }

    .card {
      border-radius: 20px;
      background-color: #ffffff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .btn-primary {
      background-color: #00BFA6;
      border: none;
    }

    .btn-primary:hover {
      background-color: #00A896;
    }

    .text-primary {
      color: #00796B !important;
    }

    a {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: #005F56;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 w-100" style="max-width: 400px;">
      <h4 class="mb-3 text-center text-primary">Login</h4>
      <form method="POST" action="../actions/login.php">
        <div class="mb-3">
          <label for="femail" class="form-label">Email</label>
          <input type="email" class="form-control" id="femail" name="femail" required>
        </div>
        <div class="mb-3">
          <label for="fpassword" class="form-label">Senha</label>
          <input type="password" class="form-control" id="fpassword" name="fpassword" required>
        </div>
        <button type="submit" name="sub" class="btn btn-primary w-100">Login</button>
        <a href="register.php">Criar nova conta</a>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
