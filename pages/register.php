<?php include "../actions/register.php" ?>

<?php if (isset($_GET['error']) && $_GET['error'] === 'email'): ?>
  <div style="color: red; text-align: center;">Email já cadastrado!</div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register</title>
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
    <div class="card p-4 w-100" style="max-width: 500px;">
      <h3 class="mb-4 text-center text-primary">Crie sua Conta</h3>
      <form method="POST" action="../actions/register.php" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="name" class="form-label">Nome completo</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Endereço de Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
          <label for="weight" class="form-label">Peso (kg)</label>
          <input type="number" class="form-control" id="weight" name="weight" step="0.1" required>
        </div>

        <div class="mb-3">
          <label for="height" class="form-label">Altura (m)</label>
          <input type="number" class="form-control" id="height" name="height" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Registrar</button>
        <a href="login.php">Já tem conta? Fazer login</a>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
