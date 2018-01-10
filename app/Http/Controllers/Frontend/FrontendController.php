<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salesmen;
use App\Models\Client;
use App\Models\Career;
use App\Models\Registeruser;

use Illuminate\Support\Facades\Storage;
/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
    
    public function home()
    {
         return view('FrontPages.home');
    }
    
    public function about()
    {   
        $data['about_name'] = 'About';
        $data['about'] = Salesmen::where('salesman_name','about')->first();
        return view('FrontPages.about', $data);
    }
    
    public function package()
    {   
        $data['packages'] = Client::all();
       return view('FrontPages.package', $data);
    }
    
    public function customer()
    {   
       $data['about'] = Salesmen::where('salesman_name','customer_term')->first();   
       return view('FrontPages.customer', $data);
    }
    
    public function franchising()
    {   
        $data['about_name'] = 'Franchising Terms & Condition';
        $data['about'] = Salesmen::where('salesman_name','franchising_term')->first();
        return view('FrontPages.about', $data);
    }
    
    public function registration()
    {   
       return view('FrontPages.registration');
    }
    
    public function career()
    {   
        return view('FrontPages.career');
    }
    
    public function contact()
    {   
        return view('FrontPages.contact');
    }
    
    public function submitCareer(Request $request)
    {
        $input = $request->except('_token', 'cv_path');
        if($request->hasFile('cv_path')){
            $filename = sha1(time()). '-'. $request->file('cv_path')->getClientOriginalName();
            // dd($filename);
            // Storage::disk('local')->putFileAs('contents',  $request->file('cv_path'), $filename);
            $filePath = public_path().'/uploads';
            // dd($filePath);
            $request->file('cv_path')->move($filePath ,$filename);
            $input['cv_path'] = $filename;
        }
        Career::create($input);
        return redirect()->route('frontend.career1')->with('message', 'Cv is successully uploaded');
        // dd($input);
    }
    
     public function submitRegistration(Request $request)
    {
        $input = $request->except('_token');
        Registeruser::create($input);
        
        return redirect()->route('frontend.registration1')->with('message', 'Registration is successully done');
        // dd($input);
    }
}
