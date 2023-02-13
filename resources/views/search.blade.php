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
<form method="get" action="{{route('search')}}">
  @csrf


  <div class="float-center">
    <div class="mb-2 col-2">
        <label for="formGroupExampleInput" class="form-label"><b>Name</b></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
      </div>
      <div class="mb-2 col-2">
        <label for="formGroupExampleInput2" class="form-label"><b>Email</b></label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email">
      </div>
      <br>
      <button class="btn btn-primary ">Submit</button>






</div>













</form>












    {{-- <div class="float-center">
        <div class="mb-2 col-2">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name">
          </div>
          <div class="mb-2 col-2">
            <label for="formGroupExampleInput2" class="form-label">Email</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your email">
          </div>
          <br>
          <button class="btn btn-primary ">Submit</button>
    
    
     --}}



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>