<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $form = DB::table('forms')->get();
        return view('index',['forms'=>$form]);
        
    }


    public function create()
    {
       return view('create');
    }

    
   

    

    public function store(Request $request){
        // return request();
          $website= new Website();
          $website->departmentName =$request->departmentName;
          $website->description =$request->description;
          $website->departmentCode =$request->departmentCode;
          $website->dean =$request->dean;
          $website->totalCredits =$request->totalCredits;
          $website->save();
          return redirect('/index');
}






 public function delete($id){
    $form=Website::find($id);
    $form->delete();
    return redirect('/index');

}
public function edit($id)
    {
        $registration = Website::find($id);
        return view('/edit',['registration'=>$registration]);
    }

public function update(Request $request)
{
    //return $request;
    $form=Website::find($request->id);
    $form->departmentName=$request->departmentName;
    $form->description=$request->description;
    $form->departmentCode=$request->departmentCode;
    $form->dean=$request->dean;
    $form->totalCredits=$request->totalCredits;
    $form->update();
    return redirect('/index');

}
 
}
