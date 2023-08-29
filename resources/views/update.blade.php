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
<title>Update</title>
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

    <div class="container-fluid" style="margin-top: 30px">
        <center>
            <h2 style="margin-bottom: 10px;margin-top: 0px">Student Details Form</h2>
        </center>
        @foreach ($errors->all() as $err)

            <script>
                Swal.fire({
                icon: 'error',
                title: 'Check Again !',
                text: '{{$err}}'
                })
            </script>
            
        @endforeach
        <div class="row justify-content-center" style="margin-bottom: 30px">
            <style>
                .c-img{
                    max-height: 150px;
                    min-width: 150px;
                    margin: 10px;
                    border-radius: 15px;
                }
            </style>
            <div class="col-7">
                <form action="/updateData" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <center>
                            <div class="col-12">
                                <img src="{{URL('images/'.$data->image)}}" alt="Avatar" class="c-img">
                            </div>
                        </center>
                    </div>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" id="id" name="id" required value="{{$data->id}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{$data->name}}">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" required value="{{$data->phone}}">
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleFormControlFile1">Student Image</label>
                            <input type="file" class="btn btn-outline-primary" id="img" name="img">
                            <span>{{$data->image}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required value="{{$data->email}}">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" id="address" name="address" required value="{{$data->address}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Student Data</button>
                </form>
            </div>
        </div>
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