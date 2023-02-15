<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style/style.css">
    <title>Document</title>
</head>

<body class="container-fluid card-width">

    <head class="card-width mx-auto sticky-top">
        <div class="sticky-top">
            <div class="navigation-bar nav-bg-color">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <div class="container-fluid">
                            <a class="navbar-brand d-flex justify-content-cente aline-item center" href="#">
                                <img src="/image/BSFMSTU.png" alt="Logo" width="80" height="80"
                                    class="d-inline-block align-text-top">
                                <div class="ms-4">
                                    <!-- <p class="logo-text">BSFMSTU</p> -->
                                    <br>
                                    <p>Alumni Association </p>
                                </div>
                            </a>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link active me-5" aria-current="page" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle ms-5 me-5" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        About
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{url('/ourmission')}}">Our Mission</a></li>
                                        <li><a class="dropdown-item" href="{{url('/cons')}}">Constitution</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ms-5 me-5" href="{{url('/regi')}}">Registration</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ms-5 me-5" href="{{url('/contact')}}">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link ms-5 me-5" href="https://bsfmstu.ac.bd/"
                                        target="_blank">BSFMSTU</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </head>


    <section class="nav-bg-color mt-5">
        <h3 class="text-center pt-5"></h3>
        <form action="{{route('search')}}" method="POST">
            @csrf

        <div class="w-75 mx-auto">
            {{-- <!-- E-Mail Input -->
            <div class="mb-3 pt-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
                <div id="" class="form-text"></div>
            </div> --}}
            <div>
                <x-label for="name" :value="__('name')" /><br>

                <x-input id="name" style=" " class="block mt-1 w-full" type="text" name="name" :value="old('Department')" required autofocus />
            </div>
            <div>
                <x-label for="Department" :value="__('Department')" /> <br>

                <x-input id="Department" style=" " class="block mt-1 w-full" type="text" name="department" :value="old('Department')"  autofocus />
            </div>

            {{-- <!-- Phone Input -->
            <div class="mb-3 pt-5">
                <label for="exampleInputEmail1" class="form-label">Phone Numbe : </label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your number with anyone else.</div>
            </div> --}}
            

            {{-- <!-- Input : Message  -->
            <label for="Message">Message</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 450px"></textarea>
                <label for="floatingTextarea2"></label>
            </div> --}}
            
            <!-- sent Message  -->
            <br>
            <button type="submit" class="btn btn-outline-success">Search</button>
            <br><br>
        </div>
    </section>






    <footer>
        <div class=" d-fle align-items-center justify-content-center mt-5">

            <p>
                Copyright © [2023] [BSFMSTU - Alumni Association]. All rights reserved.</p>
            </p>
            <p>
                Developed by "GROUP - 6"
            </p>
        </div>
    </form>
    </footer>

    <!-- script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>