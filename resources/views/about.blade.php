<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>About Us</title>
    <style>
        h1{
            color: rgb(220,53,69);
        }
        a{
            text-decoration: none;
            color: rgb(220,53,69);
        }
        a:hover{
            color: rgb(197, 75, 87);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a style="margin-left: 5px;" class="navbar-brand" href="{{route('home')}}">URL Shortener</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
          </ul>
        </div>
      </nav>
    <div class="container my-2">
        <h1>About Us</h1>
        <p>Welcome to URL Shortener</p>
        <p>At URL Shortener, we are passionate about simplifying your online experience. Our mission is to provide you with a powerful and user-friendly URL shortening service.</p>
        <p>Key Features:</p>
        <ul>
            <li>Efficient URL Shortening: Quickly create short and memorable URLs.</li>
            <li>Custom Short Codes: Personalize your links for branding and tracking.</li>
            <li>Statistics Tracking: Monitor the performance of your short URLs with detailed statistics.</li>
            <li>Security and Privacy: We prioritize the security and privacy of your data.</li>
        </ul>
        <p>Our dedicated team of developers and designers work tirelessly to ensure that our service meets the highest standards of reliability and security. We are committed to providing you with a hassle-free experience, whether you're shortening URLs for personal use or for your business needs.</p>
        <p>Got questions or suggestions? We'd love to hear from you! Please feel free to <a href="{{ route('contact') }}">contact us</a> anytime. Your feedback helps us improve our service.</p>
        <p>Thank you for choosing URL Shortener for all your URL shortening needs!</p>
    </div>
    <footer style="background-color:rgb(239, 195, 200); padding: 15px; margin-top: 15px;">
        <div class="text-center">
            Copyright &copy; {{ date("Y") }} | Created By Rajan
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
