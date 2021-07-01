<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\producctes;
class productControler extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
            $data = productes::get();

            return view('productes.index',['data' => $data ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('productes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $data = $this->validate($request,[
            "name"  => "required|min:3",
            "descriotion" => "required",
            "price" => "required|Integer"
         ]);

       

        $op =  productes::create($data);

        $message = "Error Try Again";

        if($op){
            $message = "Data Inserted";
        }
        

        session()->flash('message',$message);

        return redirect(url('/product'));


       
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
        $data =productes::find($id)->toArray();

        // $data = User::where('id',$id)->get();

        // $data = User::where('id',$id)->first();

        return view('product.edit',['data' => $data]);

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

       //
       $data = $this->validate($request,[
        "name"  => "required|min:3",
        "descriotion" => "required",
        "price" => "required|Integer"
     ]);


     $op = productes::where('id',$id)->update($data);
    

     $message = "Error Try Again !!!";

     if($op){
         $message = "Data Updated";
     }

    session()->flash('message',$message);

     return redirect(url('/product'));





        
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
           $op = productes::find($id)->delete();

           $message = "Error in delete";

           if($op){
               $message = "producte Removed";
           }
          session()->flash('message',$message);
           return back();

    }

 










}
