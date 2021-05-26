@php $active ='timekeeping' @endphp
@extends('layouts.main')
@section('title','Create Timekeeping')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Timekeeping
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3" action="/timekeeping/save" method="post">
                @csrf
                <div class="col-md-6">
                <label for="clockin" class="form-label">Clock In</label>
                <input type="time" class="form-control" id="clockin" name="clockin" required>
                </div>
                <div class="col-md-6">
                <label for="clockout" class="form-label">Clock out</label>
                <input type="time" class="form-control" id="clockout" name="clockout" required>
                </div>
                <div class="col-12">
                <label for="total" class="form-label">Total</label>
                <input type="number" class="form-control" id="total" placeholder="1234"  name="total" required>
                </div>
                <div class="col-12">
                <label for="employee_id" class="form-label">Employee Id</label>
                <input type="text" class="form-control" id="employee_id" placeholder="" name="employee_id" required>
                </div>
                <div class="col-md-6">
                <label for="timekeeping_id" class="form-label">Timekeeping Id</label>
                <input type="text" class="form-control" id="timekeeping_id" name="timekeeping_id" required>
                </div>
                
                
                
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>

    
@endsection
