<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lifestyle Theme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
  </head>
  <style>
    body {
      background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      flex-direction: column;
      overflow-y: auto;
      overflow-x: hidden; 
    }

    .navbar {
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
    }

    .nav-link:hover {
      color: #ffffff !important;
    }
    
    .navbar .form-control {
      background-color: #333;
      color: white;
      border: none;
      padding: 0.5rem;
    }

    .navbar .form-control::placeholder {
      color: #ffffff;
    }

    .navbar .btn-outline-dark {
      color: white;
      border-color: #000000;
    }

    .navbar .btn-outline-dark:hover {
      background-color: #333;
      color: white;
    }

    footer {
      padding: 20px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      background: linear-gradient(to right, #1a1a1a, #2c3e50) !important;
      color: white;
      text-align: center;
      margin-top: auto;
    }

    .social-icons a {
      color: white;
      margin: 0 10px;
      font-size: 1.5em;
    }

    .social-icons a:hover {
      color: #007bff;
    }

    footer small a {
      color: #ccc;
      margin: 0 5px;
      text-decoration: none;
    }

    footer small a:hover {
      text-decoration: underline;
    }

    @keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px);
      }
    100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    .contact-container lg {
      padding-top: 50px;
      max-width: 800px;
      margin: 50px auto;
      padding: 30px;
      background: white;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .contact-info {
      margin: 30px 0;
    }

    .contact-item {
      display: flex;
      align-items: center;
      padding: 20px;
      margin: 10px 0;
      border-radius: 10px;
      transition: all 0.3s ease;
      background: #f8f9fa;
      opacity: 0;
      animation: fadeInUp 0.5 ease forwards;
    }

    .contact-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .contact-item i {
      font-size: 2em;
      margin-right: 20px;
      color: #2c3e50;
    }

    .contact-item .content h3 {
      margin: 0;
      font-size: 1.2em;
      color: #2c3e50;
    }

    .contact-item .content p {
      margin: 5px 0 0;
      color: #666;
    }

    .contact-item a {
      text-decoration: none;
      color: inherit;
    }

    .section-title {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 50px;
      text-align: center;
      margin-bottom: 40px;
      color: #2c3e50;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Lifestyle Vibes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </div>
            <button class="btn btn-outline-dark ms-2" type="submit">Search</button>
          </form>
      </div>
    </nav>

    <div class="container-lg">
        <h2 class="section-title">Get in Touch</h2>
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <div class="content">
                    <h3>Phone</h3>
                    <p><a href="tel:+6281234567890">+62 812-3456-7890</a></p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fab fa-whatsapp"></i>
                <div class="content">
                    <h3>WhatsApp</h3>
                    <p><a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fab fa-facebook"></i>
                <div class="content">
                    <h3>Facebook</h3>
                    <p><a href="https://facebook.com/lifestylevibes" target="_blank">Lifestyle Vibes</a></p>
                </div>
            </div>

            <div class="contact-item">
                <i class="fab fa-instagram"></i>
                <div class="content">
                    <h3>Instagram</h3>
                    <p><a href="https://instagram.com/lifestylevibes" target="_blank">@lifestylevibes</a></p>
                </div>
            </div>
            <div class="contact-item">
                <i class="fab fa-linkedin"></i>
                <div class="content">
                    <h3>LinkedIn</h3>
                    <p><a href="https://linkedin.com/company/lifestylevibes" target="_blank">Lifestyle Vibes</a></p>
                </div>
            </div>
        </div>
    </div>

    <footer>
      <a>© Lifestyle Vibes, All Rights Reserved</a>
        <div class="social-icons">
          <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.twitter.com" target="_blank" aria-label="Twitter">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
            <i class="fab fa-linkedin"></i>
          </a>
        </div>
        <small>
          <a href="#">Privacy Policy</a> •
          <a href="#">Terms & Conditions</a>
        </small>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
          const contactItems = document.querySelectorAll(".contact-item");
          contactItems.forEach((item, index) => {
              item.style.animationDelay = `${index * 0.2}s`;
          });
      });
    </script>
  </body>
</html>