@extends('layout')

@section('content')
   <div class="container">
     <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        Order management
                    </h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('crud.create')}}" class="btn btn-primary float-end">Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (Session::has('Notification'))
                <div class="aleart aleart-success">
                    {{Session::get('Notification')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Numerical order</th>
                        <th>ProductID</th>
                        <th>Name</th>
                        <th>Date of birth</th>
                        <th>Sex</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($crud as $sv)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$sv->ProductID}}</td>
                            <td>{{$sv->Name}}</td>
                            <td>{{$sv->NgaySinh}}</td>
                            <td>{{$sv->Sex}}</td>
                            <td>{{$sv->Address}}</td>
                            <td>{{$sv->Phone}}</td>
                            <td>
                                <form action="{{route('crud.destroy', $sv->id)}}" method="POST">
                                <a href="{{route('crud.edit', $sv->id)}}" class="btn btn-info">edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
     </div>
   </div>
    
@endsection