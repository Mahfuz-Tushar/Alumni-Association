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
                            <h2>{{('laravel 9 crud')}}</h2>
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
                        <form action="{{route('add.update',$user->id)}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Student ID :</label>
                                <input type="text" name="id" class="form-control" value="{{$user->id}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Full Name :</label>
                                <input type="text" name="name" class="form-control" value="{{$user->name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Department :</label>
                                <input type="text" name="department" class="form-control" value="{{$user->department}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Session :</label>
                                <input type="text" name="session" class="form-control" value="{{$user->session}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address :</label>
                                <input type="text" name="address" class="form-control" value="{{$user->address}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Passing Year : </label>
                                <input type="text" name="passing_year" class="form-control" value="{{$user->passing_year}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Gender :</label>
                                <input type="text" name="gender" class="form-control" value="{{$user->gender}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Current Job :</label>
                                <input type="text" name="current_job" class="form-control"value="{{$user->current_job}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">E - Mail :</label>
                                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">password</label>
                                <input type="text" name="password" class="form-control"value="{{$user->password}}">
                            </div>
                            <button type="submit" class="btn btn-dark">Update</button>
                        </div>
                        
                    </div>
                    
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