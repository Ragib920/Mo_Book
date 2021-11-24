<?php

namespace App\Http\Controllers;

use App\Models\CateringModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CateringController extends Controller
{
    public function CateringView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = CateringModel::where("provider_id",$provider_id)->get();
        return view('provider_components.catering', compact('result'));
    }

    public function ManageCateringView(Request $request, $id = '')
    {
        if ($id>0){
            $arr= CateringModel::where(['id'=>$id])->get();

            $result['package_name']=$arr['0']->package_name;
            $result['price']=$arr['0']->price;
            $result['mrp']=$arr['0']->mrp;
            $result['short_des']=$arr['0']->short_des;
            $result['privacy_policy']=$arr['0']->privacy_policy;
            $result['image']=$arr['0']->image;
            $result['id']=$arr['0']->id;

            $result['catering']=DB::table('catering')->where(['status'=>1])->where('id','!=',$id)->get();
        }
        else{
            $result['package_name']='';
            $result['price']='';
            $result['mrp']='';
            $result['short_des']='';
            $result['privacy_policy']='';
            $result['image']="";
            $result['id']=0;

            $result['catering']=DB::table('catering')->where(['status'=>1])->get();
        }
        return view('provider_components.manage_catering',$result);
    }

    public function ManageCateringProcess(Request $request)
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

            $model = CateringModel::find($request->post('id'));
            $msg = "Updated Successfully ";
        } else {
            $model = new CateringModel();
            $msg = "Added Successfully ";
        }

        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {
                $arrImage = DB::table('catering')->where(['id' => $request->post('id')])->get();
                if (Storage::exists('/public/media/catering/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/catering/' . $arrImage[0]->image);
                }
            }

            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/catering', $image_name);
            $model->image = $image_name;
        }


        $model->package_name = $request->post('package_name');
        $model->price = $request->post('price');
        $model->mrp = $request->post('mrp');
        $model->short_des = $request->post('short_des');
        $model->privacy_policy = $request->post('privacy_policy');
        $model->provider_id= $request->post('provider_id');
        $model->status = 1;
        $model->save();
        return redirect('provider/catering')->with('message', $msg);
    }

    public function DeleteSound_system($id)
    {
        $arrImage = DB::table('sound_system')->where(['id' => $id])->get();
        if (Storage::exists('/public/media/catering/' . $arrImage[0]->image)) {
            Storage::delete('/public/media/catering/' . $arrImage[0]->image);
        }
        CateringModel::where('id', $id)->delete();
        return back()->with('message', 'Deleted Successfully');
    }

    public function status($status, $id)
    {
        $model = CateringModel::Find($id);
        $model->status = $status;
        $model->save();
        return back()->with('message', 'Status updated Successfully');
    }
}
