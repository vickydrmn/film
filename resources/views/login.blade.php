<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login-style.css')}}" />
    <script>
      function validateLogin(event) {
        event.preventDefault(); // Mencegah pengiriman formulir

        // Ambil nilai username dan password
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        // Ambil data dari localStorage
        const storedUsername = localStorage.getItem("username");
        const storedPassword = localStorage.getItem("password");

        // Cek apakah username dan password sesuai
        if (username === storedUsername && password === storedPassword) {
          // Simpan status login di localStorage
          localStorage.setItem("isLoggedIn", "true");
          // Redirect ke halaman index
          window.location.href = "index.html";
        } else {
          alert("Username atau password salah. Silakan coba lagi."); // Pesan kesalahan
        }
      }
    </script>
  </head>

  <!-- Login -->
  <body>
    <div class="login-container">
      <div class="login-form">
        <h2>Login</h2>
        <form onsubmit="validateLogin(event)">
          <div class="input-group">
            <label for="username">Username</label>
            <input
              type="text"
              id="username"
              name="username"
              placeholder="Masukkan username Anda"
              required
            />
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Masukkan password Anda"
              required
            />
          </div>
          <button type="submit" class="login-button">Login</button>
          <p class="register-link">
            Belum punya akun? <a href="register.html">Daftar di sini</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
