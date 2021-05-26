<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class DepartmentController extends Controller
{
    protected $request;
    public function __construct(Request $request){

        $this->request = $request;
    }
    public function department(){
        return view('department');
    }
    public function departmentCreate(){
        return view('create_form.departments');
    }
    public function departmentSave(){
        dd(
            $this->request->all()
          );
        
    }
}
