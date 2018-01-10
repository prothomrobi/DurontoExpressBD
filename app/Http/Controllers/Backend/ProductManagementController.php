<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Vendor;
class ProductManagementController extends Controller
{   
    protected $products; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(Product $products) {
        $this->products = $products;
     }

    public function index()
    {
        $products = $this->products->all();
        return view('backend.products.index')->with(compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $data['vendors'] = Vendor::pluck('vendor_name', 'id')->toArray();
        return view('backend.products.create', $data);
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
        $this->products->create($input);
        return redirect()->route('admin.products.index')->with('sms', 'product is successully created');
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
        $data['vendors'] = Vendor::pluck('vendor_name', 'id')->toArray();
        $data['product'] = $this->products->with('vendors')->find($id);
        return view('backend.products.edit', $data);
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
        $product = $this->products->find($id);
        $input = $request->except('_token');
        $product->update($input);
        return redirect()->route('admin.products.index')->with('sms', 'product is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->products->destroy($id);
        return;
    }
}
