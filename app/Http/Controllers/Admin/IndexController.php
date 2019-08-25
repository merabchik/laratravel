<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    const CONTENT_TYPE = "application/json";
    const CONTENT_ENCODING = "";
    const ACCEPT_ENCODING = "deflate, gzip;q=1.0, *;q=0.5";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Response $response)
    {
        $lang_id = 1; //$request->attributes->get('lang_id');
        $content = [];
        $content["tours"] = [];
        $content["cars"] = [];

        $TourPositionLink = \App\Models\TourPositionLink::where(['list_position_id' => 1])->cursor();

        foreach ($TourPositionLink as $item) {
            $tour = [];
            $tour = \App\Models\TourDetail::where(['tour_id' => $item->tour_id, 'lang_id' => $lang_id])->first();
            /*$TourTypeLinks = \App\Models\TourTypeLink::where(['tour_id' => $item->tour_id])->get();
            $list_tour_types = [];
            foreach($TourTypeLinks as $typeItem) {
            $list_tour_types[] = $typeItem->list_tour_type()->name;
            }
            print_r($list_tour_types);exit;*/
            $content["tours"][] = $tour;
            unset($tour);
        }

        $CarPositionLink = \App\Models\CarPositionLink::where(['list_position_id' => 1])->cursor();
        foreach ($CarPositionLink as $item) {
            $content["cars"][] = \App\Models\CarDetail::where(['car_id' => $item->car_id, 'lang_id' => $lang_id])->skip(0)->take(1)->first();
        }
        return $response($content)
        ->header('Content-Type', self::CONTENT_TYPE)
        ->header('Accept-Encoding', self::CONTENT_TYPE)
        ->header('Auth_Token', 'some token')
        ->header('UserDefinition', 'some hash');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about(Request $request)
    {
        $view = [];
        return view('front.index.about', $view);
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
