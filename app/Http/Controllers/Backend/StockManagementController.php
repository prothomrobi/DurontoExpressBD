<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Vendor;
use Carbon\Carbon;

class StockManagementController extends Controller
{   
    protected $stocks; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(Stock $stocks) {
        $this->stocks = $stocks;
     }

    public function index()
    {
        $stocks = $this->stocks->all();
        return view('backend.stocks.index')->with(compact('stocks'));
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
        return view('backend.stocks.create', $data);
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
        $input['lot_no'] = $this->stocks->all()->pluck('lot_no')->last() + 1;
        $input['product_code'] = Product::find($request->product_id)->value('product_code');
        $input['entry_date'] = Carbon::parse($request->input('entry_date'));
        $this->stocks->create($input);
        return redirect()->route('admin.stocks.index')->with('sms', 'Stock is successully created');
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
        $data['stock'] = $this->stocks->find($id);
        return view('backend.stocks.edit', $data);
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
        $product = $this->stocks->find($id);
        $input = $request->except('_token');
        $input['product_code'] = Product::find($request->product_id)->value('product_code');
        $input['entry_date'] = Carbon::parse($request->input('entry_date'));
        $product->update($input);
        return redirect()->route('admin.stocks.index')->with('sms', 'product is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->stocks->destroy($id);
        return;
    }
}
