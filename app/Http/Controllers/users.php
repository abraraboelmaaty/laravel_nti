<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $data = User::get();

        return view('users.index',['data' => $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            "name"  => "required|min:3",
            "email" => "required|email",
            "password" => "required|min:5|max:10"
         ]);

        $data['password'] = bcrypt($data['password']);

        $op =   User::create($data);

        $message = "Error Try Again";

        if($op){
            $message = "Data Inserted";
        }
        

        session()->flash('message',$message);

        return redirect(url('/user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(){
    
        return view('login');
      }
    
    
    
     public function logicLogin(Request $request){
       // code
    
        $data = $this->validate($request,[
    
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);
    
    
          if(auth()->attempt($data,false)){
              return redirect('/user');
          }else{
              return redirect('/Login');
          }
    
    
     }
}
