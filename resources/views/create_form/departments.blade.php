@php $active ='department' @endphp
@extends('layouts.main')
@section('title','Create Department')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Department
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3" action="/department/save" method="post">
                @csrf
                <div class="col-md-6">
                <label for="department_name" class="form-label">Department</label>
                <input type="text" class="form-control" id="department_name" name="department_name" required>
                </div>
                
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>

    
@endsection
