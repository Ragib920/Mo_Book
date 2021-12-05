<?php

namespace App\Http\Controllers;

use App\Models\ServiceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{


    public function ManageServiceView(Request $request, $id = '')
    {
        $category=array("catering","photography","decoration","lighting","sound_system");
        if ($id>0){
            $arr= ServiceModel::where(['id'=>$id])->get();

            $result['service_name']=$arr['0']->service_name;
            $result['package_name']=$arr['0']->package_name;
            $result['price']=$arr['0']->price;
            $result['mrp']=$arr['0']->mrp;
            $result['short_des']=$arr['0']->short_des;
            $result['privacy_policy']=$arr['0']->privacy_policy;
            $result['image']=$arr['0']->image;
            $result['id']=$arr['0']->id;

            $result['service']=DB::table('services')->where(['status'=>1])->where('id','!=',$id)->get();
        }
        else{
            $result['service_name']='';
            $result['package_name']='';
            $result['price']='';
            $result['mrp']='';
            $result['short_des']='';
            $result['privacy_policy']='';
            $result['image']="";
            $result['id']=0;

            $result['service']=DB::table('services')->where(['status'=>1])->get();
        }
        return view('provider_components.manage_service',compact('category'),$result);
    }

    public function ManageServiceProcess(Request $request)
    {
        //for image validation
        if ( $request->post('id')>0) {

            $image_validation = "mimes:jpeg,png,jpg,gif|max:2048";
        }
        else{
            $image_validation = "required|mimes:jpeg,png,jpg,gif|max:2048";
        }

        $rules = [
            'image' => $image_validation,
        ];
        $custom_message = [
            'image.mimes' => 'Image must be on jpeg,png,jpg,gif format',
        ];
        $this->validate($request, $rules, $custom_message);


        if ($request->post('id') > 0) {

            $model = ServiceModel::find($request->post('id'));
            $msg = "Updated Successfully ";
        } else {
            $model = new ServiceModel();
            $msg = "Added Successfully ";
        }

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {
                $arrImage = DB::table('services')->where(['id' => $request->post('id')])->get();
                if (Storage::exists('/public/media/service/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/service/' . $arrImage[0]->image);
                }
            }

            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/service', $image_name);
            $model->image = $image_name;
        }


        $model->service_name = $request->post('service_name');
        $model->package_name = $request->post('package_name');
        $model->price = $request->post('price');
        $model->mrp = $request->post('mrp');
        $model->short_des = $request->post('short_des');
        $model->privacy_policy = $request->post('privacy_policy');
        $model->provider_id= $request->post('provider_id');
        $model->status = 1;
        $model->save();
        return back()->with('message', $msg);
    }

    public function DeleteService($id)
    {
        $arrImage = DB::table('services')->where(['id' => $id])->get();
        if (Storage::exists('/public/media/service/' . $arrImage[0]->image)) {
            Storage::delete('/public/media/service/' . $arrImage[0]->image);
        }
        ServiceModel::where('id', $id)->delete();
        return back()->with('message', 'Deleted Successfully');
    }

    public function status($status, $id)
    {
        $model = ServiceModel::Find($id);
        $model->status = $status;
        $model->save();
        return back()->with('message', ' Status Updated Successfully');
    }

    public function CateringView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = ServiceModel::where("provider_id",$provider_id)
            ->where(['service_name'=>'catering'])
            ->get();
        return view('provider_components.catering', compact('result'));
    }
    public function PhotographyView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = ServiceModel::where("provider_id",$provider_id)
            ->where(['service_name'=>'photography'])
            ->get();
        return view('provider_components.photography', compact('result'));
    }
    public function DecorationView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = ServiceModel::where("provider_id",$provider_id)
            ->where(['service_name'=>'decoration'])
            ->get();
        return view('provider_components.decoration', compact('result'));
    }
    public function LightingView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = ServiceModel::where("provider_id",$provider_id)
            ->where(['service_name'=>'lighting'])
            ->get();
        return view('provider_components.lighting', compact('result'));
    }

    public function Sound_systemView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = ServiceModel::where("provider_id",$provider_id)
            ->where(['service_name'=>'sound_system'])
            ->get();
        return view('provider_components.sound_system', compact('result'));
    }

}
