<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 500px;">
      <h3 class="mb-4 text-center">User Registration</h3>
      <form method="POST" action="register.php" enctype="multipart/form-data">

        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <div class="mb-3">
          <label for="weight" class="form-label">Weight (kg)</label>
          <input type="number" class="form-control" id="weight" name="weight" step="0.1" required>
        </div>

        <div class="mb-3">
          <label for="height" class="form-label">Height (m)</label>
          <input type="number" class="form-control" id="height" name="height" step="0.01" required>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">Profile Image</label>
          <input type="file" class="form-control" id="image" name="image" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary w-100">Register</button>
        <a href="login.php">Logar</a>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>