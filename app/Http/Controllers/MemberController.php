<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Member;

class MemberController extends Controller
{
    
    public function index()
    {
   // $member = Member::get();  //orderBy('id', 'DESC' oR 'ASC');
    $member = Member::orderBy('created_at', 'ASC')->get();
     return view('member', ['members' => $member]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);


        Member::create($request->all());

        return back()->with('success', 'Thanks its done!');
    }


}
