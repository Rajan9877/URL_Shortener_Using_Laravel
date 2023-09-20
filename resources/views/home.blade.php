<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>URL Shortener</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .btn{
            width: 100%;
        }
        input[type="text"]{
            padding: 15px;
            border-radius: 50px;
            outline: 1px solid rgb(220,53,69);
            border: none;
            color: rgb(220,53,69);
        }
        .btn button{
            padding: 5px 15px;
            border-radius: 50px;
            background-color: rgb(220,53,69);
            color: white;
            border: 2px solid rgb(220,53,69);
            transition: all 0.3s;
        }
        .btn button:hover{
            background-color: transparent;
            color: rgb(220,53,69);
        }
        .main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 50vh;
            width: 100%;
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
              <a class="nav-link active" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">Contact</a>
              </li>
          </ul>
        </div>
      </nav>
    <div class="main">
        <h1 class="text-center my-2" style="color: rgb(220,53,69);">URL Shortener</h1>
        <div class="container">
            @isset($message)
                <p style="color: rgb(220,53,69);">{{ $message }}</p>
            @endisset
            <form action="{{ route('shorten') }}" method="POST">
                @csrf
                <input type="text" name="long_url" placeholder="Enter your long URL">
                <br>
                <div class="btn">
                    <button type="submit">Shorten</button>
                </div>
            </form>
            @isset($shortUrl)
                <p>Your shortened URL: <a target="_blank" href="{{ $shortUrl }}">{{ $shortUrl }}</a></p>
                <p>View Statistics: <a target="_blank" href="stats/{{ $shortCode }}">Statistics</a></p>
            @endisset
        </div>
    </div>

    <footer style="background-color:rgb(239, 195, 200); padding: 15px; margin-top: 15px;">
        <div class="text-center">
            Copyright &copy; {{ date("Y") }} | Created By Rajan
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
