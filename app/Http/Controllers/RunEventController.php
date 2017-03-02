<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RunEvent as RunEvent;
use App\RunEventItem as RunEventItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
class RunEventController extends Controller
{
    //
    public function __construct()//查看使用者是否為admin
    {
        $this->middleware('isadmin');
    }

    public function index()//顯示賽表清單
    {
    	$admin_email=Auth::user()->email;
    	$search_event=RunEvent::where('admin_email',$admin_email)->get();
    	//echo dd($search_event);
        return view('search_event',array('search_event'=>$search_event));

    }

    public function update($id)//修改賽項
    {      
        $data=RunEvent::find($id);
        //dd($data);
        return view('update_event',array('data'=>$data));
    }

    public function rundetail($id)//每項比賽的報名清單及成績
    {
        $data = RunEventItem::where('run_event_id',$id)->get();
        //dd($data);
        return view('run_detail',array('data'=>$data));
    }     

    public function postRundetail($id)//未完成
    {
        return response()->json([
            'a' => '未完賽',
            'b' => 'bbb',
            ]);
        $data = RunEventItem::where('run_event_id',$id)->get();
        //dd($data);
        return view('run_detail',array('data'=>$data));
    }     

    public function save(Request $req)//儲存修改賽項
    {
        $id=$req->input('id');
        $name=$req->input('name');
        $hold_time=$req->input('hold_time');
        $admin_email=$req->input('admin_email');

        $data=array('name'=>$name,'hold_time'=>$hold_time,'admin_email'=>$admin_email);

        RunEvent::where('id',$id)->update($data);
        return redirect('/adminsearch');
        // return "update success";
    }

    public function delete(Request $req)//刪除賽項
    {
         $id=$req->input('id');
         RunEvent::where('id',$id)->delete();
         RunEventItem::where('run_event_id',$id)->delete();
         return redirect('/adminsearch');
    }

    public function create()//建立賽項
    {
        return view('create_event')->with('new_event', '建立賽事');
    }

    public function store(Request $req)//儲存建立賽項
    {
        
        $name=$req->input('name');
        $hold_time=$req->input('hold_time');
        $admin_email=$req->input('admin_email');
        $data=array('name'=>$name,'hold_time'=>$hold_time,'admin_email'=>$admin_email);
        RunEvent::create($data);
        return redirect('/adminsearch');
    }
    
}

