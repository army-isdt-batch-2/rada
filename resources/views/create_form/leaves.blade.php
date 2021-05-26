@php $active ='leaves' @endphp
@extends('layouts.main')
@section('title','Create Leaves')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Leaves
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3" action="/leaves/save" method="post">
                @csrf
                <div class="col-md-4">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" placeholder="Fullname" name="fullname" required>
                </div>
                <div class="col-md-4">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" placeholder="" name="employee_id" required>
                </div>
                <div class="col-4">
                <label for="designation" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designation" placeholder="Designation" name="designation" required>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <label for="leavesType" class="form-label">Leaves Type</label>
                        <select id="leavesType" class="form-select" name="leaves_type" required>
                            <option selected>Choose...</option>
                            <option>leavesType 1</option>
                            <option>leavesType 2</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="start_date" class="form-label">Start</label>
                        <input type="date" class="form-control" id="start_date" placeholder="Start Date" name="start_date" required>
                    </div>
                    <div class="col-md-12">
                        <label for="end" class="form-label">End</label>
                        <input type="date" class="form-control" id="end" placeholder="End Date" name="end_date" required>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12">
                        <label for="notes" class="form-label">Notes</label>
                        <textarea rows="7" type="text" class="form-control" id="notes" placeholder="notes" name="notes" required></textarea>
                    </div>
                </div>

                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

    
@endsection
