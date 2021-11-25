<?php

namespace App\Http\Controllers;

use App\Models\DetailsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DetailsController extends Controller
{
    public function DetailsView(Request $request)
    {
        $provider_id=$request->session()->get("PROVIDER_ID");
        $result = DetailsModel::where("provider_id",$provider_id)->get();
        return view('provider_components.company_details', compact('result'));
    }

    public function ManageDetailsView(Request $request, $id = '')
    {
        if ($id>0){
            $arr= DetailsModel::where(['id'=>$id])->get();

            $result['company_name']=$arr['0']->company_name;
            $result['phone']=$arr['0']->phone;
            $result['address']=$arr['0']->address;
            $result['short_des']=$arr['0']->short_des;
            $result['company_image']=$arr['0']->company_image;
            $result['id']=$arr['0']->id;

            $result['details']=DB::table('details')->where(['status'=>1])->where('id','!=',$id)->get();
        }
        else{
            $result['company_name']='';
            $result['phone']='';
            $result['address']='';
            $result['short_des']='';
            $result['company_image']="";
            $result['id']=0;

            $result['details']=DB::table('details')->where(['status'=>1])->get();
        }
        return view('provider_components.manage_company_details',$result);
    }

    public function ManageDetailsProcess(Request $request)
    {
        //for image validation
        if ( $request->post('id')>0) {

            $image_validation = "mimes:jpeg,png,jpg,gif|max:2048";
        }
        else{
            $image_validation = "required|mimes:jpeg,png,jpg,gif|max:2048";
        }

        $rules = [
            'company_image' => $image_validation,
        ];
        $custom_message = [
            'company_image.mimes' => 'Image must be on jpeg,png,jpg,gif format',
        ];
        $this->validate($request, $rules, $custom_message);


        if ($request->post('id') > 0) {

            $model = DetailsModel::find($request->post('id'));
            $msg = " Details Updated Successfully ";
        } else {
            $model = new DetailsModel();
            $msg = " Details Added Successfully ";
        }

        if ($request->hasfile('company_image')) {

            if ($request->post('id') > 0) {
                $arrImage = DB::table('details')->where(['id' => $request->post('id')])->get();
                if (Storage::exists('/public/media/details/' . $arrImage[0]->company_image)) {
                    Storage::delete('/public/media/details/' . $arrImage[0]->company_image);
                }
            }

            $company_image = $request->file('company_image');
            $ext = $company_image->extension();
            $image_name = time() . '.' . $ext;
            $company_image->storeAs('/public/media/details', $image_name);
            $model->company_image = $image_name;
        }


        $model->company_name = $request->post('company_name');
        $model->phone = $request->post('phone');
        $model->address = $request->post('address');
        $model->short_des = $request->post('short_des');
        $model->provider_id= $request->post('provider_id');

        $model->status = 1;
        $model->save();
        return redirect('provider/details')->with('message', $msg);
    }

    public function DeleteDetails($id)
    {
        $arrImage = DB::table('details')->where(['id' => $id])->get();
        if (Storage::exists('/public/media/details/' . $arrImage[0]->company_image)) {
            Storage::delete('/public/media/details/' . $arrImage[0]->company_image);
        }
        DetailsModel::where('id', $id)->delete();
        return back()->with('message', 'Details Deleted Successfully');
    }

    public function status($status, $id)
    {
        $model = DetailsModel::Find($id);
        $model->status = $status;
        $model->save();
        return back()->with('message', ' Details status updated Successfully');
    }
}
