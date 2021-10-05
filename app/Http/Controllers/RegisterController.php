<?php

namespace App\Http\Controllers;
use DB;
use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reg = DB::select('select * from register');
        return view('welcome')
            ->with('reg', $reg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register.create');
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
        $this->validate($request, [
            'name' => 'required',            
            
            'phone'=>'required|max:11',
            'address'=>'required',
            'gender'=>'required',
            'township'=>'required',
            
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $township = $request->input('township');
        $gender = $request->input('gender');
        $created_at = date("Y-m-d H:i:s");
         try{
        $reg = new register();
        $reg->name = $name;
        $reg->email = $email;
        $reg->phone = $phone;
        $reg->address = $address;
        $reg->township = $township;
        $reg->gender = $gender;
        $reg->created_at = $created_at;
            if($reg->save()){
        
                $message = 'Success, User registration is success ...!';
                $request->session()->flash('success', $message);
    
             
    
              
            return redirect()->action(
                'SuccessController@thankyou'
            );
                
            }
         }
        
        catch(Exception $e){
            
            $smessage = 'Fail, Error in user registration ...!';
            $request->session()->flash('fail', $smessage);

            return redirect()->action(
                'RegisterController@create'
            );
        }
       
      

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
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
        $reg = DB::table('register')->where('id', $id)->first();
        return view('register.edit', ['reg' => $reg]);
        dd($reg);
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
        
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $township = $request->input('township');
        
        $created_at = date("Y-m-d H:i:s");
         try{
        $regs = register::find($id);
        $regs->name = $name;
        $regs->email = $email;
        $regs->phone = $phone;
        $regs->address = $address;
        $regs->township = $township;
        
        $regs->created_at = $created_at;
            if($regs->save()){
        
                $message = 'Success, User registration is success ...!';
                $request->session()->flash('success', $message);
    
             
    
              
            return redirect()->action(
                'SuccessController@success'
            );
                
            }
         }
        
        catch(Exception $e){
            
            $smessage = 'Fail, Error in user registration ...!';
            $request->session()->flash('fail', $smessage);

            return redirect()->action(
                'RegisterController@index'
            );
        }
       
      

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
}
