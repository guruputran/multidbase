<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\HumptyModel;
use App\DumptyModel;
use DB;

class HumptyDumptyController extends Controller
{
    
//Method 1 (comment  protected $connection = 'mysql'; in HumptyModel.php)
public function storeHumpty(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
          ]);
        $hModel = new HumptyModel;
        $hModel->setConnection('mysql'); //1st method 
        $hModel->create($request->all());
        return back()->with('success', 'Thanks its done!');
    }

    // Method 2 (uncomment  protected $connection = 'mysql'; in HumptyModel.php)
    // public function storeHumpty(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //       ]);

    //     HumptyModel::create($request->all());
    //     return back()->with('success', 'Thanks its done!');
    // }

    public function showdatas(){
         $humps = HumptyModel::orderBy('created_at', 'ASC')->get();
          $dumps = DumptyModel::orderBy('created_at', 'ASC')->get();
          return view('humpdump', compact('humps', 'dumps'));
    }

    public function pushes(){
        $humpties=HumptyModel::all();
        
    foreach ($humpties as $humpty) {
   $dumpty = new DumptyModel;
   $dumpty->email=$humpty->email;
   $dumpty->name=$humpty->name;
   $dumpty->message=$humpty->message;
   $dumpty->save();
    }
   DB::table('humpty_members')->delete();
   return back()->with('success', 'Thanks its done!');
    }
}

