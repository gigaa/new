<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
use App\Slider;
use App\Partner;
use App\Advantage;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    // public function mainredirect()
    // {
    //     return view('redirect');

    // }

    // public function index()
    // {        

    //     $abouts = About::orderBy('created_at','desc')->get();
    //     return view('front')->with(['abouts'=> $abouts]);
    // }
    private $about;

    public function __construct(about $about){
        $this->about = $about;
    }

    public function index()
    {
        $abouts = $this->about->orderBy('created_at','desc')->get();
        $sliders = Slider::orderBy('id','desc')->get();
        $partners = Partner::orderBy('id','desc')->get();
        $advantages = Advantage::orderBy('id','desc')->get();

        return view('front', compact('abouts'))->with([
            'abouts'=> $abouts,
            'sliders' => $sliders,
            'partners' => $partners,
            'advantages'=> $advantages
        ]);
        
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
