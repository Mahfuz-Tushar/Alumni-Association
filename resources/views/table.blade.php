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

    <table class="table table-border  table-striped">
        <thead>
            <tr>
                <td>id </td>
                <td>name</td>
                <td>department</td>
                <td>session</td>
                <td>address</td>
                <td>passing_year</td>
                <td>gender</td>
                <td>current_job</td>
                <td>email</td>
                <td>password</td>
                




            </tr>



        </thead>
        <tbody>
            @foreach ($data as $item)
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->department}}</td>
            <td>{{$item->session}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->passing_year}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->current_job}}</td>]
            <td>{{$item->email}}</td>
            <td>{{$item->password}}</td>
            
                
            @endforeach





        </tbody>







    </table>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>