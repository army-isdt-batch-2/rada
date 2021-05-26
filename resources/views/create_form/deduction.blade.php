@php $active ='deduction' @endphp
@extends('layouts.main')
@section('title','Create Deduction')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Deduction
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
           
            <form class="row g-3" action="/deduction/save" method="post">
                @csrf
                <div class="col-md-4">
                    <label for="contribution_type" class="form-label">Contribution Type</label>
                    <select id="contribution_type" class="form-select" name="contribution_type" required>
                        <option selected>Tax</option>
                        <option>Tax 1</option>
                        <option>Tax 2</option>
                    </select>
                </div>
                <div class="col-md-8">
                <label for="basic_range" class="form-label">Base Range</label>
                <input type="number" class="form-control" id="basic_range" placeholder="Base Range" name="basic_range" required>
                </div>
                <div class="col-md-4">
                <label for="monthly_contribution" class="form-label">Monthly Contribution</label>
                <input type="number" class="form-control" id="monthly_contribution" placeholder="Monthly Contribution" name="monthly_contribution" required>
                </div>
                <div class="col-4">
                <label for="employee_share" class="form-label">Employee Share</label>
                <input type="text" class="form-control" id="employee_share" placeholder="Employee Share" name="employee_share" required>
                </div>
                <div class="col-4">
                <label for="employer_share" class="form-label">Employer Share</label>
                <input type="text" class="form-control" id="employer_share" placeholder="Employer Share" name="employer_share" required>
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
