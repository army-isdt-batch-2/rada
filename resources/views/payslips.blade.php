@php $active ='payslips' @endphp
@extends('layouts.main')
@section('title','Payslips')
@section('content')
<div class="card col-12 mt-5">
    <div class="card">
    <div class="card-body row p-5"> 
    
        <div class="col-10">
            <h4>
                Payslips
            </h4>
        </div> 
        <div class="col-12">
            <hr>    
        </div>
          <form class="row g-2">
  
              <div class="col-auto">
                  <input type="search" class="form-control" id="search" placeholder="Search">
              </div>
              <div class="col-auto" style="position: absolute; right:20px;">
                  <a href="/payslips/create" class="btn btn-dark pull right">Create</a>
                  <a href="/payslips/save" class="btn btn-dark pull right">View</a>
              </div>
          </form>
      <br> 
      <table class="table">
          <thead>
          <tr>
              <th scope="col">#</th>
              <th scope="col">Processed</th>
              <th scope="col">Cut off Start</th>
              <th scope="col">Cut off End</th>
              <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
              <th scope="row">1</th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
          
          
          </tbody>
      </table>
    </div>
@endsection
