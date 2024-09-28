<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/register-style.css')}}" />
    <script>
      function registerUser(event) {
        event.preventDefault(); // Mencegah pengiriman formulir

        // Ambil nilai username, email, password, dan konfirmasi password
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword =
          document.getElementById("confirm-password").value;

        // Validasi input
        if (password !== confirmPassword) {
          alert("Password dan konfirmasi password tidak cocok.");
          return;
        }

        // Simpan data ke localStorage
        localStorage.setItem("username", username);
        localStorage.setItem("password", password);

        // Arahkan ke halaman login setelah pendaftaran
        window.location.href = "login.html";
      }
    </script>
  </head>

  <!-- Register -->
  <body>
    <div class="register-container">
      <div class="register-form">
        <h2>Daftar</h2>
        <form onsubmit="registerUser(event)">
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
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Masukkan email Anda"
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
          <div class="input-group">
            <label for="confirm-password">Konfirmasi Password</label>
            <input
              type="password"
              id="confirm-password"
              name="confirm-password"
              placeholder="Konfirmasi password Anda"
              required
            />
          </div>
          <button type="submit" class="register-button">Daftar</button>
          <p class="login-link">
            Sudah punya akun? <a href="login.html">Login di sini</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
