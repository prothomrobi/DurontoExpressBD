<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Vendor;
use Carbon\Carbon;

class PurchasesController extends Controller
{   
    protected $purchases; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(Purchase $purchases) {
        $this->purchases = $purchases;
     }

    public function index()
    {
        $purchases = $this->purchases->all();
        return view('backend.purchases.index')->with(compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data['vendors'] = Vendor::pluck('vendor_name', 'id')->toArray();
        $data['products'] = Product::pluck('product_name', 'id')->toArray();
        return view('backend.purchases.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $input = $request->except('_token');
        $input['lot_no'] = $this->purchases->all()->pluck('lot_no')->last() + 1;
        $input['product_code'] = Product::find($request->product_id)->value('product_code');
        $input['entry_date'] = Carbon::parse($request->input('entry_date'));
        $this->purchases->create($input);
        return redirect()->route('admin.purchases.index')->with('sms', 'Purchase is successully created');
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
        $data['products'] = Product::pluck('product_name', 'id')->toArray();
        $data['vendors'] = Vendor::pluck('vendor_name', 'id')->toArray();
        $data['purchase'] = $this->purchases->find($id);
        return view('backend.purchases.edit', $data);
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
        $product = $this->purchases->find($id);
        $input = $request->except('_token');
        $input['product_code'] = Product::find($request->product_id)->value('product_code');
        $input['entry_date'] = Carbon::parse($request->input('entry_date'));
        $product->update($input);
        return redirect()->route('admin.purchases.index')->with('sms', 'product is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->purchases->destroy($id);
        return;
    }
}
