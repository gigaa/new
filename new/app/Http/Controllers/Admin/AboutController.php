<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\About;


class AboutController extends Controller
{
    private $about;

    public function __construct(about $about){
        $this->about = $about;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function mainredairect()
    // {   
    //     return redirect()->route('?lang=ka');
    // }
    public function main()
    {
        return view('admin.layouts.app');
    }
  
    public function edit($id)
    {
        $abouts = $this->about->find($id);
        return view('admin.about.edit',compact('abouts','id'));
    }

    public function update(AboutRequest $request, $id)
    {
        $abouts = $this->about->find($id);
        
        $abouts->title_ka = $request->get('title_ka');
        $abouts->title_en = $request->get('title_en');
        $abouts->text_ka = $request->get('text_ka');
        $abouts->text_en = $request->get('text_en');    
        $abouts->save();
        // return redirect('/admin/about/1/edit')->with('success','ცვლლება წარმატებით განორციელდა');
        return back()->with('success','ცვლლება წარმატებით განორციელდა');

    }


}
