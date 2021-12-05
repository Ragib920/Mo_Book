<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function ManageOrderProcess(Request $request)
    {
        $model = new OrderModel();
        $model->date = $request->input('date');
        $model->provider_id = $request->input('provider_id');
        $model->service_id = $request->input('service_id');
        $model->user_id = $request->input('user_id');
        $model->o_status = 1;
        $msg = "Updated Successfully ";
        $model->save();
        return redirect('/my_order')->with('message',$msg);
    }
    public function MyOrderView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");

        $result['order']=  DB::table('services')
            ->leftJoin('order','order.service_id','=','services.id')
            ->leftJoin('user','user.id','=','order.user_id')
            ->where(['order.provider_id'=>$provider_id])
            ->orderBy('order.created_at', 'desc')->paginate(20);
//        echo "<pre>";
//        print_r( $result['order']);
        return view('provider_components.order',$result);
    }

    public function status($status, $o_id)
    {
        $model = OrderModel::Find($o_id);
        $model->o_status = $status;
        $model->save();
        //        echo "<pre>";
//        print_r( $result['order']);
        return back()->with('message', ' Status Updated Successfully');
    }
}
