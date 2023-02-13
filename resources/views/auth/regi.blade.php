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
                                    <p>Aumni Association </p>
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
                                        <li><a class="dropdown-item" href="{{url('/our-mission')}}">Our Mission</a></li>
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
                                    <a class="nav-link ms-5 me-5" href="https://bsfmstu.ac.bd/" target="_blank">BSFMSTU</a>
                                </li>
    
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </head>

    <section class="nav-bg-color mt-5 p-5">
        <h4 class="text-center">Membership Form</h4>
        <form action="" class="w-75 mx-auto">
            <!-- name input -->
            <label for="Name">Name:</label>
            <input class="form-control" type="text" placeholder="Example : 'Rahim'" aria-label="default input example">
            <br>

            <!-- Department input  -->
            <label for="Dept">Department:</label>
            <select class="form-select" id="inputGroupSelect01">
                <option value="1">CSE</option>
                <option value="2">EEE</option>
                <option value="3">ME</option>
            </select>
            <br>

            <!-- session input  -->
            <label for="session">Session:</label>
            <select class="form-select" id="inputGroupSelect01">
                <option value="1">2018-19</option>
                <option value="2">2019-2020</option>
                <option value="3">2020-21</option>
            </select>
            <br>

            <!-- address input  -->
            <label for="address">Address</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
            </div>
            <br>

            <!-- passing year input  -->
            <label for="passing-year">Passing Year:</label>
            <select class="form-select" id="inputGroupSelect01">
                <option value="1">2022</option>
                <option value="2">2023</option>
                <option value="3">2024</option>
            </select>
            <br>

            <!-- gender input  -->
            <label for="Gender">Gender:</label>
            <select class="form-select" id="inputGroupSelect01">
                <option value="1">Male</option>
                <option value="2">Female</option>
                <option value="3">Othes</option>
            </select>
            <br>

            <!-- Current Job input  -->
            <label for="current-job">Current Job:</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2"></label>
            </div>
            <br>

            <!-- email input  -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address :</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <br>

            <!-- password input  -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password : </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <br>

            <!-- confirm password input  -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password : </label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <br>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-outline-success">Submit</button>

        </form>
        
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
    </footer>
    <!-- script  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>