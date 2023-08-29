<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- sweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<title>Home</title>
</head>

<body>
    <!--NavBar/Start-->
    <nav class="navbar sticky-top navbar-expand-lg bg-white shadow">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="font-size: larger;">||||</span>
        </button>
        <div class="collapse navbar-collapse justify-content-center text-dark" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/"
                        style="font-size: medium;">Main Page</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/reg"
                        style="font-size: medium;">Register</a></li>
            </ul>
        </div>
    </nav>
    <!--NavBar/End-->

    {{-- table --}}
    <div class="container-fluid text-center" style="margin-top: 30px">
        <h2 style="margin: 30px">Student Detail Table</h2>
        <center>
            <table class="table table-hover col-10 text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Image</th>
                        <th scope="col">Button</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)  
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->image}}</td>
                            <td><a href="/delete/{{$item->id}}"><button class="btn btn-danger">Delete</button></a> <a href="/update/{{$item->id}}"><button class="btn btn-warning">Update</button></a></td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
        </center>
    </div>
    {{-- sweetalert --}}
    @include('sweetalert::alert')
  
    {{-- footer --}}
    {{-- <footer class="bg-white text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-dark" href="#">Kavindu Bimsara</a>
        </div>
        <!-- Copyright -->
    </footer> --}}
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>