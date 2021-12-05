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
        return view('provider_components.details', compact('result'));
    }
    public function ManageDetailsView(Request $request, $details_id = '')
    {
        if ($details_id>0){
            $arr= DetailsModel::where(['details_id'=>$details_id])->get();

            $result['company_name']=$arr['0']->company_name;
            $result['phone']=$arr['0']->phone;
            $result['address']=$arr['0']->address;
            $result['des']=$arr['0']->des;
            $result['company_image']=$arr['0']->company_image;
            $result['details_id']=$arr['0']->details_id;

            $result['details']=DB::table('details')->where(['status'=>1])->where('details_id','!=',$details_id)->get();
        }
        else{
            $result['company_name']='';
            $result['phone']='';
            $result['address']='';
            $result['des']='';
            $result['company_image']="";
            $result['details_id']=0;

            $result['details']=DB::table('details')->where(['status'=>1])->get();
        }
        return view('provider_components.manage_company_details',$result);
    }

    public function ManageDetailsProcess(Request $request)
    {
        //for image validation
        if ( $request->post('details_id')>0) {

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


        if ($request->post('details_id') > 0) {

            $model = DetailsModel::find($request->post('details_id'));
            $msg = " Details Updated Successfully ";
        } else {
            $model = new DetailsModel();
            $msg = " Details Added Successfully ";
        }

        if ($request->hasfile('company_image')) {

            if ($request->post('details_id') > 0) {
                $arrImage = DB::table('details')->where(['details_id' => $request->post('details_id')])->get();
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
        $model->des = $request->post('short_des');
        $model->provider_id= $request->post('provider_id');
        $model->status = 1;
        $model->save();
        return redirect('provider/details')->with('message', $msg);
    }


}
