<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <div style="float:left;">
                            <h2>{{('Create an user')}}</h2>
                        </div>
                        <div style="float:right;">
                        <a class="btn btn-dark" href="{{route('add.create')}}">{{('create')}}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                               @endforeach
                                </ul>
                                </div>
                              @endif
                        <form action="{{route('add.store')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for=""> <b>Student ID :</b> </label>
                                <input type="text" name="id" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Full Name :</b></label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Department :</b> </label>
                                <input type="text" name="department" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Session :</b> </label>
                                <input type="text" name="session" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Address :</b> </label>
                                <input type="text" name="address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Passing Year :</b></label>
                                <input type="text" name="passing_year" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Gender :</b></label>
                                <input type="text" name="gender" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Current Job :</b></label>
                                <input type="text" name="current_job" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>E - Mail :</b></label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for=""><b>Password :</b></label>
                                <input type="password"  name="password" class="form-control">
                            </div> <br>
                            <button type="submit" class="btn btn-outline-dark ">Submit</button>
                     
                        </div>
                        
                    </div>
                    
                
          
            
        </div>
          
                        </form>
                         
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>