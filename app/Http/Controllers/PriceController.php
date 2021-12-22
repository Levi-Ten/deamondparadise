<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;
use App\Models\Admin;
use App\Http\Requests\UpdatePriceRequest;
use App\Http\Requests\StorePriceRequest;


class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prices = Price::all();
        $loggedUserInfo = Admin::where('id','=', session('LoggedUser'))->first();
        return view('admin.dashboard',  compact('prices', 'loggedUserInfo'));
       //return view('site.services', compact('prices'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        $prices = Price::paginate(10);
       return view('site.services', compact('prices'));
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePriceRequest $request)
    {
        Price::create($request->only(['service', 'price']));
        return redirect()->route('prices.index')->withSuccess('Created user '.$request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        return view('admin.show', compact('price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view('admin.form', compact('price'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePriceRequest $request, Price $price)
    {
        $price->update($request->only(['service', 'price']));
        return redirect()->route('prices.index')->withSuccess('Updated price '.$price->service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        $price->delete();
        return redirect()->route('prices.index')->withDanger('Deleted user '.$price->service);
    }
    
}
