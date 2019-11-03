<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailContentController extends Controller
{
    //
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = \App\Content::where('content_id', '=', $id)->get();

        // foreach($data as $data){
        //     dd($data['user_name']); 
        // }

        return view('detailContent',compact('data'));
    }
}
