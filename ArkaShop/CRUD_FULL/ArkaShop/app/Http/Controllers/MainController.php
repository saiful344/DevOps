<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\product;
use App\cashier;
use App\category;
use DB;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cashier = cashier::all();
        $category = category::all();
        $data = DB::table('product')
                    ->join('cashier','product.id_cashier', '=' ,'cashier.id')
                    ->join('category','product.id_category','=','category.id')
                    ->select('product.*','cashier.name as cashier_name','category.name as category_name')->get();

        return view("index",["data" => $data,"cashier" => $cashier,"category" => $category]);
    }
    public function getcashier(){
        $data = cashier::all();
        $html = "";
        foreach ($data as $n) {
            $html .= '<option value="'.$n->id.'">'.$n->name.'</option>';
        }

        return $html;
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
        product::create($request->all());
        return redirect("/");
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
        $data = product::findOrFail($id);
        $data->delete();

        return redirect("/");
    }
}
