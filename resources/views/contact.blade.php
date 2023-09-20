<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Contact Us</title>
    <style>
        h1{
            text-align: center;
            color: rgb(220,53,69);
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
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('contact')}}">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    <div class="container my-2">
        <h1>Contact Us</h1>
    </div>
    <div class="formcontainer container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @isset($message)
            <p style="color: green;">{{ $message }}</p>
        @endisset
        <form method="POST" action="{{route('submitForm')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name : </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group my-2">
                <label for="email">Email : </label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile : </label>
                <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter your mobile number">
            </div>
            <div class="form-group my-2">
                <label for="subject">Subject : </label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the subject of your message">
            </div>
            <div class="form-group">
                <label for="message">Message : </label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
            </div>
            <div class="my-2">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </form>
        
    </div>
    <footer style="background-color:rgb(239, 195, 200); padding: 15px; margin-top: 15px;">
        <div class="text-center">
            Copyright &copy; {{ date("Y") }} | Created By Rajan
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
