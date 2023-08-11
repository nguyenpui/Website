@extends('layout')

@section('content')
   <div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>More products</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('crud.index')}}" class="btn btn-primary float-end">List of products</a>
                </div>
            </div>
        </div>
        <div class="card-body">
          <form action="{{route('crud.store')}}"method="POST">
          @csrf
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <strong>ProductID</strong>
                    <input type="text" name="ProductID" class="form-control" placeholder="Enter your ProductID ">
                </div>
                <div class="form-group">
                    <strong>Full Name</strong>
                    <input type="text" name="Name" class="form-control" placeholder="Enter your first and last name ">
                </div>
                <div class="form-group">
                    <strong>Date of birth</strong>
                    <input type="date" name="NgaySinh" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Sex</strong>
                    <select name="Sex" class="form-select">
                      <option selected>Choose your gender</option>
                      <option value="Female">Female</option>
                      <option value="Male">Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Address</strong>
                    <input type="text" name="Address" class="form-control" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <strong>Phone</strong>
                    <input type="text" name="Phone" class="form-control" placeholder="Enter Phone">
                </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success mt-2">Save</button>
        </form>
        </div>
    </div>
   </div>
    
@endsection