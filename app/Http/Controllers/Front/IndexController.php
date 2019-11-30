<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    private $lang_id = null;

    public function __construct(Request $request) {
        $this->lang_id = $request->attributes->get('lang_id');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*DB::table('users')->insert([
            'name' => 'SA Admin',
            'email' => 'merabi777@gmail.com',
            'password' => Hash::make('12345679')
        ]);*/

        $view = [];

        $TourPositionLink = \App\Models\TourPositionLink::where(['list_position_id' => 1])->cursor();

        foreach ($TourPositionLink as $item) {
            $tour = [];
            $tour = \App\Models\TourDetail::where(['tour_id' => $item->tour_id, 'lang_id' => $this->lang_id])->first();
            /*$TourTypeLinks = \App\Models\TourTypeLink::where(['tour_id' => $item->tour_id])->get();
            $list_tour_types = [];
            foreach($TourTypeLinks as $typeItem) {
            $list_tour_types[] = $typeItem->list_tour_type()->name;
            }
            print_r($list_tour_types);exit;*/
            $view["tours"][] = $tour;
            unset($tour);
        }

        $CarPositionLink = \App\Models\CarPositionLink::where(['list_position_id' => 1])->cursor();
        foreach ($CarPositionLink as $item) {
            $view["cars"][] = \App\Models\CarDetail::where(['car_id' => $item->car_id, 'lang_id' => $this->lang_id])->skip(0)->take(1)->first();
        }
        return view('front.default.index.index', $view);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about(Request $request)
    {
        $view = [];
        return view('front.default.index.about', $view);
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
