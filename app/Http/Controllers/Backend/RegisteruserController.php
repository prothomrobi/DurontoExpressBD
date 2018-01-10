<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Registeruser;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class RegisteruserController extends Controller
{
    protected $Registeruser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(Registeruser $Registeruser) {
       $this->Registeruser = $Registeruser;
     }

    public function index()
    {
        //
        $registerusers = $this->Registeruser->all();
        return view('backend.registeruser.index')->with(compact('registerusers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $registeruser = $this->Registeruser->find($id);

        return view('backend.registeruser.show')->with(compact('registeruser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        
        $registeruser = $this->Registeruser->find($id);

        return view('backend.registeruser.edit')->with(compact('registeruser'));
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
        
        $registeruser = $this->Registeruser->find($id);
        $input = $request->except('_token');
        
        $registeruser->update($input);
        return redirect()->route('admin.registerusers.index')->with('sms', 'Register user is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->Registeruser->destroy($id);
        return;
    }
    
    
}
