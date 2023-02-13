<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style/style.css">
    <title>Alumni Association || BSFMSTU</title>
</head>

<body class="container-fluid">
    <!-- nav  -->
    <div class="sticky-top card-width mx-auto">
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
    <!-- nav  -->
    <header class="card-width mx-auto">
        <!-- Carousel start here  -->
        <div id="carouselExampleCaptions" class="carousel slide mt-5">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/1.jpg" class="d-block w-50 h-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                {{-- <div class="carousel-item active">
                    <img src="/image/2.jpg" class="d-block w-50 h-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div> --}}
                <div class="carousel-item">
                    <img src="/image/3.jpg" class="d-block w-50 h-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/image/4.jpg" class="d-block w-50 h-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel end here  -->
    </header>
    <!-- at a glance start here -->

    <section class="mt-5 mb-5 mx-auto card-width">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card p-3">
                    <img src="/image/graduates.png" alt="" width="50" height="50" class="mx-auto">
                    <div class="card-body">
                        <h3 class="card-title text-center card-value-number">700</h3>
                        <p class="card-text text-center"> Registered Alumni</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <img src="/image/session.png" alt="" width="50" height="50" class="mx-auto">
                    <div class="card-body">
                        <h3 class="card-title text-center card-value-number">12</h3>
                        <p class="card-text text-center"> Session</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <img src="/image/Dept.png" alt="" width="50" height="50" class="mx-auto">
                    <div class="card-body">
                        <h3 class="card-title text-center card-value-number">7</h3>
                        <p class="card-text text-center">Department</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- at a glance end here -->


    <!-- FAQ section start here  -->
    <section class="mb-5 card-width mx-auto d-flex our-partner">
        <div class="halfs p-4 accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the first item's accordion body.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine
                        this
                        being filled with some actual content.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate
                        the
                        <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more
                        exciting
                        happening here in terms of content, but just filling up the space to make it look, at least at
                        first
                        glance, a bit more representative of how this would look in a real-world application.
                    </div>
                </div>
            </div>
        </div>
        <div class="halfs p-4">
            <h4 class="text-center">Up comming Events</h4>
            <hr>
            <!-- modal area start here  -->
            <div>
                <p>
                    "Attention all graduates! Join us for the <b>20th Convocation</b> ceremony on <b>1 March 2023</b>.
                    Celebrate your achievements and receive your well-deserved award."
                </p>
                <button type="button" class="btn btn-outline-success mx-auto" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    Get Registed Now
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registration Now</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- modal insider form start here  -->
                                <form>
                                    <div class="mb-3">
                                        <!-- full name  -->
                                        <label for="Full Name">Full Name:</label>
                                        <div class="input-group mb-3">
                                            <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                                            <input type="text" class="form-control" aria-label="Sizing example input"
                                                aria-describedby="inputGroup-sizing-default">
                                        </div>
                                        <!-- session  -->
                                        <label for="session">Session:</label>
                                        <div class="input-group mb-3">
                                            <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                                            <select class="form-select" id="inputGroupSelect02">

                                                <option value="1">2018-19</option>
                                                <option value="2">2019-20</option>
                                                <option value="3">2020-21</option>
                                            </select>
                                        </div>
                                        <!-- Department  -->
                                        <label for="Department">Department:</label>
                                        <div class="input-group mb-3">
                                            <!-- <span class="input-group-text" id="inputGroup-sizing-default">Default</span> -->
                                            <select class="form-select" id="inputGroupSelect02">

                                                <option value="1">CSE</option>
                                                <option value="2">EEE</option>
                                                <option value="3">ECE</option>
                                            </select>
                                        </div>

                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.</div>
                                    </div>

                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">Submit</button>
                                </form>
                                <!-- modal insider form end here  -->
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Understood</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal area end here  -->
        </div>
    </section>
    <!-- FAQ section end here  -->


    <!-- out partner part start here  -->
    <section class="card-width our-partner mx-auto mb-5">
        <h2 class="text-center mt-5">Our Partners</h2>
        <hr>
        <div class="row">
            <div class="card-width mx-auto d-grid partner-list col-lg-4 col-md-6 col-sm-12">
                <img class="img-fluid" src="/image/partners/3.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/4.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/5.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/6.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/7.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/8.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/rocket.png" alt="" width="200" height="200">
                <img class="img-fluid" src="/image/partners/BSFMSTU (1).png" alt="" width="200" height="200">
            </div>
        </div>
    </section>
    <!-- out partner part end here  -->

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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>