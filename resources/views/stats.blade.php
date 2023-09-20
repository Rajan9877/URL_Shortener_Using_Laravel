<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Short URL Statistics</title>
    <style>
        .tablecontainer{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        tr, th, td{
            padding: 15px;
            text-align: center;
            border: 2px solid rgb(220,53,69);
        }
        a{
            display: block;
            text-align: center;
        }
        th{
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
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </nav>
    <h1 class="text-center mt-5" style="color: rgb(220,53,69);">Short URL Statistics</h1>
    <h2 class="text-center" style="color: rgb(220,53,69);">Short URL: <a href="{{ route('redirect', $urlShortener->short_code) }}">{{ $urlShortener->short_code }}</a></h2>
    <div class="tablecontainer">
        <table>
        <thead>
            <tr>
                <th>Click Time</th>
                <th>Visitor IP Address</th>
                <th>For Total Clicks See Last Row</th> <!-- New column for click count -->
            </tr>
        </thead>
        <tbody>
            @foreach($stats as $stat)
            <tr>
                <td>{{ $stat->created_at }}</td>
                <td>{{ $stat->visitor_ip }}</td>
                <td>{{ $stat->clicks }}</td> <!-- Display click count -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    

    {{ $stats->links() }} <!-- Pagination links -->

    <a href="{{ route('home') }}">Back to Home</a>
    <footer style="background-color:rgb(239, 195, 200); padding: 15px; margin-top: 15px;">
        <div class="text-center">
            Copyright &copy; {{ date("Y") }} | Created By Rajan
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
