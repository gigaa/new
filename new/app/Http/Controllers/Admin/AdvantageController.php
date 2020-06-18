<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advantage;

class AdvantageController extends Controller
{
    private $advantage;

    public function __construct(advantage $advantage){
        $this->advantage = $advantage;
    }
  
    public function edit($id)
    {
        $advantages = $this->advantage->find($id);
        return view('admin.advantage.edit',compact('advantages','id'));
    }

    public function update(Request $request, $id)
    {
        $advantages = $this->advantage->find($id);
        $advantages->title_ka = $request->get('title_ka');
        $advantages->title_en = $request->get('title_en');
        $advantages->content_ka = $request->get('content_ka');
        $advantages->content_en = $request->get('content_en');    
        $advantages->point1_ka = $request->get('point1_ka');
        $advantages->point1_en = $request->get('point1_en');   
        $advantages->point2_ka = $request->get('point2_ka');
        $advantages->point2_en = $request->get('point2_en');   
        $advantages->point3_ka = $request->get('point3_ka');
        $advantages->point3_en = $request->get('point3_en');   
        $advantages->icon1 = $request->get('icon1');     
        $advantages->icon2 = $request->get('icon2');     
        $advantages->icon3 = $request->get('icon3');     
        $advantages->icon4 = $request->get('icon4');     
        $advantages->txt1_ka = $request->get('txt1_ka');     
        $advantages->txt1_en = $request->get('txt1_en');     
        $advantages->txt2_ka = $request->get('txt2_ka');     
        $advantages->txt2_en = $request->get('txt2_en');  
        $advantages->txt3_ka = $request->get('txt3_ka');     
        $advantages->txt3_en = $request->get('txt3_en');  
        $advantages->txt4_ka = $request->get('txt4_ka');     
        $advantages->txt4_en = $request->get('txt4_en');  
        $advantages->save();
        // return redirect('/admin/advantage/1/edit')->with('success','ცვლლება წარმატებით განორციელდა');
        return back()->with('success','ცვლლება წარმატებით განორციელდა');

    }

}
