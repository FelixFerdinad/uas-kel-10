<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register - Lifestyle Vibes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
      }

      .navbar {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background: linear-gradient(to right, #1a1a1a, #2c3e50) !important;
        height: 100px;
      }

      .navbar-brand {
        font-size: 2rem;
        font-weight: bold;
        color: #fff !important;
        text-transform: uppercase;
        letter-spacing: 1px;
      }

      .nav-link {
        font-weight: 500;
        transition: color 0.3s ease;
        color: #ccc !important;
      }

      .nav-link:hover {
        color: #ffffff !important;
      }

      .register-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        padding: 40px;
        width: 100%;
        max-width: 400px;
        margin: 100px auto;
      }

      .register-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #2c3e50;
      }

      .btn-primary {
        background-color: #1a1a1a;
        border: none;
      }

      .btn-primary:hover {
        background-color: #2c3e50;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Lifestyle Vibes</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/subscribe">Subscribe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/account">Login</a>
            </li>
          </ul>
        </div>
        <form class="d-flex">
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
            <input
              class="form-control"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
          </div>
          <button class="btn btn-outline-dark ms-2" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="register-container">
      <h2>Create Your Account</h2>
      <form method="POST" action="{{ route('register.submit') }}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Enter your full name"
            required
          />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
          />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            placeholder="Create a password"
            required
          />
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input
            type="password"
            class="form-control"
            id="confirm-password"
            name="password_confirmation"
            placeholder="Confirm your password"
            required
          />
        </div>
        <button type="submit" class="btn btn-primary w-100">Register</button>
      </form>
    </div>
  </body>
</html>