<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaming App</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Navbar Brand */
.navbar-brand {
  font-size: 1.5rem; /* Adjust the font size as needed */
}

/* Navbar Link */
.navbar-nav .nav-link {
  font-size: 1.2rem; /* Adjust the font size as needed */
}

/* Dropdown Menu */
.dropdown-menu {
  min-width: 150px; /* Set the minimum width of the dropdown menu */
}

/* Dropdown Menu Item */
.dropdown-menu .dropdown-item {
  font-size: 1rem; /* Adjust the font size as needed */
}

/* Active Link */
.navbar-nav .nav-item.active .nav-link {
  color: #007bff; /* Change the color of the active link */
}

/* Hero section styles */
.hero {
    background-image: url('back.webp');
    background-size: cover;
    text-align: center;
    background-attachment: fixed;
    padding: 100px 20px;
    color: #fff;
}

.hero h2 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.cta-button {
    display: inline-block;
    background-color: #ff6600;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 1.2em;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #cc5500;
}
/* Button Styles */
.btn {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3; /* Change the background color on hover */
}

/* Primary Button Styles */
.btn-primary {
  background-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3; /* Change the background color on hover */
}

/* Features Section */
.features {
  padding: 80px 0;
}

/* Feature Item */
.feature-item {
  text-align: center;
  margin-bottom: 30px;
}

.feature-item img {
  max-width: 100%;
  height: auto;
}

.feature-item h3 {
  font-size: 1.5rem;
  margin-top: 20px;
}

.feature-item p {
  font-size: 1rem;
  color: #666;
}

/* Games Showcase Section */
.games-showcase {
  padding: 80px 0;
}

.games-showcase h2 {
  text-align: center;
  margin-bottom: 40px;
}

/* Game Item */
.game-item {
  text-align: center;
  margin-bottom: 30px;
}

.game-item img {
  max-width: 100%;
  height: auto;
}

.game-item h3 {
  font-size: 1.5rem;
  margin-top: 20px;
}

.game-item p {
  font-size: 1rem;
  color: #666;
}

/* Testimonials Section */
.testimonials {
  padding: 80px 0;
}

.testimonials h2 {
  text-align: center;
  margin-bottom: 40px;
}

/* Testimonial */
.testimonial {
  text-align: center;
  margin-bottom: 40px;
}

.testimonial img {
  width: 100px; /* Adjust the width of the avatar image */
  height: 100px; /* Adjust the height of the avatar image */
  border-radius: 50%;
  margin-bottom: 20px;
}

.testimonial p {
  font-size: 1.2rem;
  margin-bottom: 20px;
}

.testimonial .author {
  font-weight: bold;
  font-style: italic;
}

/* About Section */
.about {
  padding: 80px 0;
}

.about h2 {
  text-align: center;
  margin-bottom: 40px;
}

.about p {
  font-size: 1.1rem;
  line-height: 1.6;
  margin-bottom: 20px;
}

/* Blog Section */
.blog {
  padding: 80px 0;
}

.blog h2 {
  text-align: center;
  margin-bottom: 40px;
}

/* Blog Post */
.blog-post {
  margin-bottom: 40px;
}

.blog-post img {
  max-width: 100%;
  height: auto;
  margin-bottom: 20px;
}

.blog-post h3 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

.blog-post .post-date {
  font-size: 0.9rem;
  color: #666;
  margin-bottom: 10px;
}

.blog-post p {
  font-size: 1rem;
  margin-bottom: 20px;
}

.read-more {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.read-more:hover {
  background-color: #0056b3;
}

/* Newsletter Section */
.newsletter {
  background-color: #f9f9f9;
  padding: 80px 0;
  text-align: center;
}

.newsletter h2 {
  margin-bottom: 20px;
}

.newsletter p {
  font-size: 1.1rem;
  margin-bottom: 30px;
}

/* Newsletter Form */
.newsletter-form {
  max-width: 500px;
  margin: 0 auto;
}

.newsletter-form input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.newsletter-form button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.newsletter-form button:hover {
  background-color: #0056b3;
}

/* Footer Section */
.footer {
  background-color: #333;
  color: #fff;
  padding: 50px 0;
}

.footer h3 {
  color: #fff;
  margin-bottom: 20px;
}

.footer p {
  font-size: 0.9rem;
}

.footer ul {
  list-style: none;
  padding: 0;
}

.footer ul li {
  margin-bottom: 10px;
}

.footer ul li a {
  color: #fff;
  text-decoration: none;
}

.social-icons {
  list-style: none;
  padding: 0;
}

.social-icons li {
  display: inline-block;
  margin-right: 10px;
}

.social-icons li a {
  color: #fff;
  font-size: 1.5rem;
  text-decoration: none;
}

.social-icons li a:hover {
  color: #007bff;
}

    </style>
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

@section('about')
<section class="about">
  <div class="container">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>
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