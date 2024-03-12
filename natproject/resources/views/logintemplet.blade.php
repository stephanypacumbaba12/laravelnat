<!DOCTYPE html>
<html lang="en">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{asset('images/logo.png')}}">
    <!-- <link rel="stylesheet" href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    


    <head>
          <title>Gaming App - @yield('title')</title>
    </head>
<body>


@section('header')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Gaming App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="games">Games</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="feature">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blog">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="login">Login</a>
          <a class="dropdown-item" href="signup">Sign Up</a>
          <a class="dropdown-item" href="profile">Profile</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
@show

@section('login')
<section class="login-form">
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </section>
    @show

@section('feature')
<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="feature-item">
          <img src="feature1.jpg" alt="Feature 1">
          <h3>Feature 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-item">
          <img src="feature2.jpg" alt="Feature 2">
          <h3>Feature 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-item">
          <img src="feature3.jpg" alt="Feature 3">
          <h3>Feature 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@show

@section('game')
<section class="games-showcase">
  <div class="container">
    <h2>Games Showcase</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="game-item">
          <img src="game1.jpg" alt="Game 1">
          <h3>Game 1</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="game-item">
          <img src="game2.jpg" alt="Game 2">
          <h3>Game 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="game-item">
          <img src="game3.jpg" alt="Game 3">
          <h3>Game 3</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@show

@section('testi')
<section class="testimonials">
  <div class="container">
    <h2>Testimonials</h2>
    <div class="testimonial">
      <img src="avatar1.jpg" alt="Avatar 1">
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      <p class="author">- John Doe</p>
    </div>
    <div class="testimonial">
      <img src="avatar2.jpg" alt="Avatar 2">
      <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
      <p class="author">- Jane Smith</p>
    </div>
  </div>
</section>
@show

@section('blog')
<section class="blog">
  <div class="container">
    <h2>Latest Blog Posts</h2>
    <div class="blog-post">
      <img src="post1.jpg" alt="Blog Post 1">
      <h3>Post Title 1</h3>
      <p class="post-date">Published on March 12, 2024</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
    <div class="blog-post">
      <img src="post2.jpg" alt="Blog Post 2">
      <h3>Post Title 2</h3>
      <p class="post-date">Published on March 10, 2024</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <a href="#" class="read-more">Read More</a>
    </div>
  </div>
</section>

@show


@section('news')
<section class="newsletter">
  <div class="container">
    <h2>Subscribe to Our Newsletter</h2>
    <p>Stay updated with the latest news, game releases, and special offers!</p>
    <form class="newsletter-form">
      <input type="email" placeholder="Enter your email address" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>
</section>
@show


@section('footer')
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="col-md-3">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h3>Follow Us</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fab fa-facebook">F</i></a></li>
          <li><a href="#"><i class="fab fa-twitter">T</i></a></li>
          <li><a href="#"><i class="fab fa-instagram">I</i></a></li>
          <li><a href="#"><i class="fab fa-youtube">Y</i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
@show
<!-- Bootstrap JS (Optional) - Needed for dropdown functionality -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
