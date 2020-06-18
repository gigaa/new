<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Http\Requests\PartnerEditRequest;
use App\Partner;

class PartnerController extends Controller
{

    private $partner;

    public function __construct(Partner $partner){
        $this->partner = $partner;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = $this->partner->orderBy('created_at','desc')->get();
        return view('admin.partner.index', compact('partners'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerRequest $request)
    {
       $partners=$this->partner;
       $partners->link=$request->input('link');

       if($image=$request->file('image'))
       { 
                $filename=$request->image->getClientOriginalName();
                $new_name=date("d-m-Y-H-i-s").str_replace(" ", "", basename($filename));
                $image->move('partners/',$new_name);
                $partners->image=$new_name;
        }
        $partners->save();
        return redirect('/admin/partner')->with('success', 'დაემატა წარმატებით შესრულდა');
    }


    public function edit($id)
    {
        $partners= $this->partner->find($id);
        return view('admin.partner.edit',compact('partners','id')); 
    }

   
    public function update(PartnerEditRequest $request, $id)
    {
        $partners= $this->partner->find($id);
        $partners->link = $request->get('link');
       if($image=$request->file('image'))
       { 
                unlink('partners/'.$partners->image);
                $filename=$request->image->getClientOriginalName();
                $new_name=date("d-m-Y-H-i-s").str_replace(" ", "", basename($filename));
                $image->move('partners/',$new_name);
                $partners->image=$new_name;
        }
        $partners->save();
        return redirect('/admin/partner')->with('success', 'ცვლლება წარმატებით განხორციელდა');
    }


    public function destroy($id)
    {
        $partners= $this->partner->find($id);

        $partners->delete();
        unlink('partners/'.$partners->image);
        return redirect('/admin/partner')->with('success','წაიშალა წარმატებით განხორციელდა');  
    }
}
