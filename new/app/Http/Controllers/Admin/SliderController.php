<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\SliderEditRequest;
use App\Slider;

class SliderController extends Controller
{
    private $slider;

    public function __construct(slider $slider){
        $this->slider = $slider;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = $this->slider->orderBy('created_at','desc')->get();
        return view('admin.slider.index', compact('sliders'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
       $sliders=$this->slider;
       $sliders->title_ka=$request->input('title_ka');
       $sliders->title_en=$request->input('title_en');

       if($image=$request->file('image'))
       { 
                $filename=$request->image->getClientOriginalName();
                $new_name=date("d-m-Y-H-i-s").str_replace(" ", "", basename($filename));
                $image->move('sliders/',$new_name);
                $sliders->image=$new_name;
        }
        $sliders->save();
        return redirect('/admin/slider')->with('success', 'დაემატება წარმატებით განხორციელდა');
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
        $sliders= $this->slider->find($id);
        return view('admin.slider.edit',compact('sliders','id')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderEditRequest $request, $id)
    {
        $sliders= $this->slider->find($id);
        $sliders->title_ka = $request->get('title_ka');
        $sliders->title_en = $request->get('title_en');

       if($image=$request->file('image'))
       {        
                unlink('sliders/'.$sliders->image);

                $filename=$request->image->getClientOriginalName();
                $new_name=date("d-m-Y-H-i-s").str_replace(" ", "", basename($filename));
                $image->move('sliders/',$new_name);
                $sliders->image=$new_name;
        }
        $sliders->save();
        return redirect('/admin/slider')->with('success', 'ცვლლება წარმატებით განხორციელდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders= $this->slider->find($id);

        $sliders->delete();
        unlink('sliders/'.$sliders->image);
        return redirect('/admin/slider')->with('success','წაშალა წარმატებით განხორციელდა');  
    }
}
