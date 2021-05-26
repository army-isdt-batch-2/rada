@php $active ='payslips' @endphp
@extends('layouts.main')
@section('title','Create Payslips')
@section('content')

    <div class="card col-12 mt-5">
        <div class="card">
        <div class="card-body row p-5"> 
        
        <div class="col-10">
            <h4>
                Create Payslips
            </h4>
        </div>
        <div class="col-12">
            <hr>    
        </div>
        <div class="col12">
            <form class="row g-3" action="/payslips/save" method="post">
                @csrf
                <div class="col-md-6">
                    
                <label for="cutoff_start" class="form-label">Cutoff Start</label>
                <input type="date" class="form-control" id="cutoff_start" name="cutoff_start" required>
                </div>
                <div class="col-md-6">
                    <label for="cutoff_end" class="form-label">cutoff End</label>
                    <input type="date" class="form-control" id="cutoff_end" name="cutoff_end" required>
                    </div>
                
                <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
    </div>

    
@endsection
