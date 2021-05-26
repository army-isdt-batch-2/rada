@php $active ='employees' @endphp
@extends('layouts.main')
@section('title','Create Employees')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Employees
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3" action="/employees/save" method="post">
                @csrf
                <div class="col-md-12">
                <label for="photos" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photos"  name="photos" required>
                </div>
                <div class="col-md-4">
                <label for="firstname" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname" required>
                </div>
                <div class="col-4">
                <label for="middlename" class="form-label">Middle name</label>
                <input type="text" class="form-control" id="middlename" placeholder="Middle name" name="middlename" required>
                </div>
                <div class="col-4">
                <label for="lastname" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname" required>
                </div>
                <div class="col-md-4">
                <label for="contact" class="form-label">Contact</label>
                <input type="number" class="form-control" id="contact" placeholder="09..." name="contact" required>
                </div>       
                <div class="col-md-4">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" required>
                </div>
                <div class="col-md-4">
                <label for="gender" class="form-label">Gender</label>
                <select id="gender" class="form-select" name="gender"required>
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
                <div class="col-md-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="textarea" class="form-control" id="address" name="address" required>
                </div>
                <div class="col-md-4">
                <label for="department_id" class="form-label">Department</label>
                <select id="department_id" class="form-select" name="department_id"required>
                    <option selected>Choose...</option>
                    <option>Depart 1</option>
                    <option>Depart 2</option>
                    <option>Depart 3</option>
                </select>
                </div>
                <div class="col-md-4">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation" required>
                </div>
                <div class="col-md-4">
                    <label for="rate" class="form-label">Basic Rate</label>
                    <input type="number" class="form-control" id="rate" name="rate" required>
                </div>
                <div class="col-md-6">
                    <label for="ph_id" class="form-label">PhilHealth Contribution Table</label>
                    <select id="ph_id" class="form-select" name="ph_id"required>
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="sss_id" class="form-label">SSS Contribution Table</label>
                    <select id="sss_id" class="form-select" name="sss_id"required>
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="pi_id" class="form-label">Pag-ibig Contribution Table</label>
                    <select id="pi_id" class="form-select" name="pi_id" required>
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                 </div>
                 <div class="col-md-6">
                    <label for="tax_id" class="form-label">Income Tax Table</label>
                    <select id="tax_id" class="form-select" name="tax_id" required>
                        <option selected>Choose...</option>
                        <option>Depart 1</option>
                        <option>Depart 2</option>
                        <option>Depart 3</option>
                    </select>
                </div>

                <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                    Check me out
                    </label>
                </div>
                </div>
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>

    
@endsection
