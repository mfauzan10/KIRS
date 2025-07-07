<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login SIM Pengajuan Penelitian RS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #36C0D1;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .login-container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background-color: #fff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .login-box h2 {
      color: #36C0D1;
      margin-bottom: 1.5rem;
      text-align: left;
    }

    .footer {
      text-align: center;
      color: white;
      padding: 1rem 0;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="Controller/auth.php" method="post">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
        </div>
        <button type="submit" class="btn w-100" style="background-color: #36C0D1; color: white; font-weight: bold;">
          Login
        </button>
        <div class="text-center mt-3">
          <span>Belum punya akun? </span>
          <a href="views/researcher/daftar.php" style="color: #36C0D1; font-weight: bold;">Daftar di sini</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
    &copy; 2025 RSUD dr. Soedono. All rights reserved.
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
