<?php

namespace App\Http\Controllers;

use App\Models\OfferGen;
use Illuminate\Http\Request;
use PDF;

class OfferGenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePdf(Request $request, $id)
    {
        //retrieve an offer
        $data = OfferGen::findOrFail($id);

        //share data to view
        view()->share('offer-generator', $data);
        $pdf = PDF::loadView('frontend.pages.offer-generator', compact('data'));

        //download pdf file
        return $pdf->download('offer.pdf');
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
        $data = New OfferGen;
        $data = $request->product_name;
        $data = $request->desc;
        $data = $request->benefit;
        $data = $request->offer_title;
        $data = $request->offer_price;
        $data = $request->bonus_title;
        $data = $request->bonus_price;

        $data->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OfferGen  $offerGen
     * @return \Illuminate\Http\Response
     */
    public function show(OfferGen $offerGen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OfferGen  $offerGen
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferGen $offerGen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OfferGen  $offerGen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferGen $offerGen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OfferGen  $offerGen
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferGen $offerGen)
    {
        //
    }
}
