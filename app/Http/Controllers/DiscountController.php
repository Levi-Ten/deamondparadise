<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetMultipleDiscountsRequest;
use App\Http\Requests\StoreDicountRequest;
use App\Models\Discount;
use App\Models\Price;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //displays servives and their discounts
        $prices = Price::withSum('discounts', 'discount')->get();
        return view('admin.discount.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.discount.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDicountRequest $request)
    {
        Discount::create([
            'discount' => $request->get('discount')
        ]);
        dd('discount was created');
    }

    public function createServiceDiscount()
    {
        $discounts = Discount::orderBy('discount')->get();
        $services = Price::all();
        return view('admin.discount.createServiceDiscount', compact('discounts', 'services'));
    }

    public function setMultipleDiscounts(SetMultipleDiscountsRequest $request)
    {
        $services = Price::findMany($request->get('services'));
        $max_discount_value = Discount::MAX_DISCOUNT_VALUE;

        foreach ($services as $service) {
            $wanted_discount = Discount::find($request->get('discount'))->discount;
            $wanted_discount_sum = $service->discounts_sum + $wanted_discount;
            $service_discount_sum = $wanted_discount_sum < Discount::MAX_DISCOUNT_VALUE ? $wanted_discount : 99;
            if ($service->discounts_sum <= $max_discount_value && $service_discount_sum < $max_discount_value) {
                $discount = Discount::find($request->get('discount'));
                $discount->prices()->attach($service->id);
//                $discount->prices()->syncWithoutDetaching($service->id);
            } else {
                $service->discounts()->detach();
                $discount = Discount::where('discount', 99)->first();
//                $discount->prices()->syncWithoutDetaching($service->id);
                $discount->prices()->attach($service->id);
            }
        }
        return redirect()->route('discounts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit(Discount $discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discount $discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }
}
