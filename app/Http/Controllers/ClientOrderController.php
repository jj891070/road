<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RunEvent as RunEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use App\RunEventItem as RunEventItem;
class ClientOrderController extends Controller
{
    public function __construct()//查看使用者是否為client
    {
        $this->middleware('isclient');
    }

    public function index()//顯示賽表清單
    {
    	
    	$client_search_event=RunEvent::all();
        return view('client_search_event',array('client_search_event'=>$client_search_event));
    }

    public function store(Request $req)//加入賽事&瀏覽全部廠商所舉辦的賽事
    {
    	//return"test";
    	
        $run_event_id=$req->input('run_event_id');
        $client_id=Auth::user()->id;
        $data=array('run_event_id'=>$run_event_id,'client_id'=>$client_id);
        RunEventItem::create($data);
        return redirect('/show');
    }

    public function show()//秀出已加入賽事
    {

        $user = Auth::user();
    	return view('client_show_added', [
            'items'=>$user->run_event_item,
        ]);
    }

    public function delete(Request $req)//刪除已加入賽事
    {
        $id=$req->input('id');
        RunEventItem::where('id',$id)->delete();
        return redirect('/show');
    }
}
