@php $active ='attendance' @endphp
@extends('layouts.main')
@section('title','Attendance')
@section('content')
<div class="card col-12 mt-5">
    <div class="card">
    <div class="card-body row p-5"> 
    
        <div class="col-10">
            <h4>
                Attendance
            </h4>
        </div> 
        <div class="col-12">
            <hr>    
        </div>
          <form class="row g-2">
  
              {{-- <div class="col-auto">
                  <input type="search" class="form-control" id="search" placeholder="Search">
              </div> --}}
              {{-- <div class="col-auto" style="position: absolute; right:20px;">
                <a href="/attendance/create" class="btn btn-dark pull right">Create</a>
              </div> --}}
          </form>
      <br> 
      <table class="table">
          <thead>
          <tr>

             								
              <th scope="col"></th>
              <th scope="col">REG IN</th>
              <th scope="col">REG OUT</th>
              <th scope="col">REG HOURS</th>
              <th scope="col">OT HOURS</th>
              <th scope="col">NIGHT DIFF HOURS</th>
              <th scope="col">EARLY</th>
              <th scope="col">TARDY</th>
              <th scope="col">Double Pay</th>
              <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          <tr>
                                    <th scope="row">
                                        <img width="50px" src="https://xsodia.space/payroll/assets/16281099.jpg" alt="">
                                        <br>
                                        <small>Kenneth Abenojar</small>
                                    </th>
                                    <td>
                                        <input type="time" class="form-control">
                                    </td>
                                    <td>
                                        <input type="time" class="form-control">
                                    </td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <button href="/payslips/save" class="btn btn-sm btn-dark">Save</button>
                                    </td>
                                </tr>  
         
          
          </tbody>
      </table>
    </div>
@endsection
