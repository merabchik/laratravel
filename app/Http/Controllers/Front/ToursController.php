<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models as Models;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * Tours controller class
 */
class ToursController extends Controller
{
    private $lang_id = null;

    public function __construct(Request $request) {
        $this->lang_id = $request->attributes->get('lang_id');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Response $response
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Response $response)
    {
        $view = [];
        $TourPositionLink = \App\Models\TourPositionLink::where(['list_position_id' => 1])->cursor();
        foreach($TourPositionLink as $item){
            $view["tours"][] = \App\Models\TourDetail::where(['tour_id' => $item->tour_id, 'lang_id' => $this->lang_id])->first();
        }

        return view('front.default.tours.list', $view);
    }

    /**
     * Get tour details record with related records
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Response $response
     * @return \Illuminate\Http\Response
     */
    public function tour(Request $request) {
        $tour_id = (int) $request->id;
        $view = [];
        $tour = \App\Models\Tour::where(['id' => $tour_id])->first();
        $view["tour"] = \App\Models\TourDetail::where(['tour_id' => $tour->id, 'lang_id' => $this->lang_id])->first();

        $view["similarTours"] = $this->getSimmilarTours($tour_id);
        
        return view('front.default.tours.tour', $view);
    }

    /**
     * Get tour details record with related records
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Response $response
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $request, Response $response){
        $tour_id = (int) $request->id;
        $view = [];
        $tour = \App\Models\Tour::where(['id' => $tour_id])->first();
        $view["tour"] = \App\Models\TourDetail::where(['tour_id' => $tour->id, 'lang_id' => $this->lang_id])->first();
        return view('front.default.tours.booking', $view);
    }

    /**
     * Get simmilar Tours
     * @param $pTourId int
     * @return Array of tour records
     */
    private function getSimmilarTours($pTourId) {
        $tours = \App\Models\TourDetail::where(['lang_id' => $this->lang_id])->cursor();
        return $tours;
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Response $response
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Illuminate\Http\Response $response
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
        //
    }
}
