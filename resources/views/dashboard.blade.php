<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Admin Dashboard') }}
        </h2>
    </x-slot>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <body>
        <div class="container-fluid mx-auto">
            <div class="row mt-3">
                <div class="col-md-8 offset-md-2">
                    <div class=" ">
                        <div class="d-flex justify-content-between mt-5 mb-5">
                            <div style="">
                                <h2>{{('Admin Panel')}}</h2>
                            </div>
                            <div style="">
                                <a class="btn btn-dark" href="{{route('add.create')}}">{{('create')}}</a>
                            </div>
                        </div>
                        <div class=" ">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>{{('id')}}</th>
                                        <th>{{('name')}}</th>
                                        <th>{{('department')}}</th>
                                        <th>{{('session')}}</th>
                                        <th>{{('address')}}</th>
                                        <th>{{('passing_year')}}</th>
                                        <th>{{('gender')}}</th>
                                        <th>{{('current_job')}}</th>
                                        <th>{{('email')}}</th>
                                        {{-- <th>{{('password')}}</th> --}}
                                        <th>{{'action'}}</th>
                                    </tr>
                                </thead>
                                @foreach ($user as $item)
                                <tbody>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->department}}</td>
                                    <td>{{$item->session}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->passing_year}}</td>
                                    <td>{{$item->gender}}</td>
                                    <td>{{$item->current_job}}</td>
                                    <td>{{$item->email}}</td>
                                    {{-- <td>{{$item->password}}</td> --}}
                                    <td><a class="btn btn-success btn-sm" href="{{route('add.edit',$item->id)}}">{{('Edit')}}</a></td>
                                    <td><a class="btn btn-success btn-sm btn-danger" href="{{route('add.delete',$item->id)}}" color="red"><button class="button button3"></button>{{('Delete')}}</a></td>
                                </tbody>
                                    
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    

    
                                          
                   
                   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
                </body>
            </div>
        </div>
    </div>
</x-app-layout>
