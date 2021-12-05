<?php

namespace App\Http\Controllers;

use App\Models\CateringModel;
use App\Models\DecorationModel;
use App\Models\DetailsModel;
use App\Models\LightingModel;
use App\Models\OrderModel;
use App\Models\PhotographyModel;
use App\Models\ProviderModel;
use App\Models\ServiceModel;
use App\Models\Sound_systemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{

    public function indexView()
    {
        $result['catering']=  DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'catering'])
            ->where(['services.status'=>1])
            ->orderBy('services.id', 'desc')->paginate(6);

//        ->rightJoin('details','details.id','=','catering.provider_id')
//        ->where(['catering.status'=>1])
//        ->orderBy('catering.id', 'desc')->paginate(6);
//        echo "<pre>";
//        print_r( $result['catering']);

        $result['photography']= DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'photography'])
            ->where(['services.status'=>1])
            ->orderBy('id', 'desc')->paginate(6);

        $result['decoration']= DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'decoration'])
            ->where(['services.status'=>1])
            ->orderBy('id', 'desc')->paginate(6);

        $result['lighting']=DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'lighting'])
            ->where(['services.status'=>1])
            ->orderBy('id', 'desc')->paginate(6);

        $result['sound_system']=DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'sound_system'])
            ->where(['services.status'=>1])
            ->orderBy('id', 'desc')->paginate(6);

        return view('web_components.index',$result);
    }

    public function AllCateringView(Request $request)
    {
        $result['catering']=  DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'catering'])
            ->where(['services.status'=>1])
            ->orderBy('services.id', 'desc')->paginate(21);
        return view('web_components.catering',$result);
    }

    public function AllPhotographyView(Request $request)
    {
        $result['photography']= DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'photography'])
            ->where(['services.status'=>1])
            ->orderBy('services.id', 'desc')->paginate(21);
        return view('web_components.photography',$result);
    }

    public function AllDecorationView(Request $request)
    {
        $result['decoration']= DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'decoration'])
            ->where(['services.status'=>1])
            ->orderBy('services.id', 'desc')->paginate(21);
        return view('web_components.decoration',$result);
    }

    public function AllLightingView(Request $request)
    {
        $result['lighting']=DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'lighting'])
            ->where(['services.status'=>1])
            ->orderBy('services.id', 'desc')->paginate(21);
        return view('web_components.lighting',$result);
    }

    public function AllSoundSystemView(Request $request)
    {
        $result['sound_system']=DB::table('services')
            ->leftJoin('details','details.details_id','=','services.provider_id')
            ->where(['services.service_name'=>'sound_system'])
            ->where(['services.status'=>1])
            ->orderBy('services.id', 'desc')->paginate(21);
        return view('web_components.sound_system',$result);
    }

    public function AllCompaniesView(Request $request)
    {
        $result['providers']=DB::table('providers')
            ->leftJoin('details','details.provider_id','=','providers.id')
            ->where(['providers.status'=>1])
            ->orderBy('providers.id', 'desc')->paginate(20);
        return view('web_components.companies',$result);
    }

    public function CompanyDetailsView($id=null)
    {

        $result['catering']= ServiceModel::where(['provider_id'=>$id])
            ->where(['services.service_name'=>'catering'])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['photography']= ServiceModel::where(['provider_id'=>$id])
            ->where(['services.service_name'=>'photography'])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['lighting']= ServiceModel::where(['provider_id'=>$id])
            ->where(['services.service_name'=>'lighting'])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['decoration']= ServiceModel::where(['provider_id'=>$id])
            ->where(['services.service_name'=>'decoration'])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['sound_system']= ServiceModel::where(['provider_id'=>$id])
            ->where(['services.service_name'=>'sound_system'])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['provider']= ProviderModel::find($id);
        $result['data']= DetailsModel::where(['provider_id'=>$id])
            ->get();
//        echo "<pre>";
//        print_r( $result['data']);
//        $result['data']= DetailsModel::find($id);

        return view('web_components.company_details',$result);
    }

    public function ServiceDetailsView($id=null)
    {
        $result['services']=  DB::table('services')
            ->rightJoin('details','details.provider_id','=','services.provider_id')
            ->where(['services.id'=>$id])
            ->where(['services.status'=>1])
            ->get();
//        echo "<pre>";
//        print_r( $result['catering']);
        return view('web_components.service_details',$result);
    }

    public function MyOrderView(Request $request)
    {
        $user_id=$request->session()->get("USER_ID");

        $result['order']=  DB::table('services')
            ->rightJoin('details','details.provider_id','=','services.provider_id')
            ->leftJoin('order','order.service_id','=','services.id')
            ->leftJoin('user','user.id','=','order.user_id')
            ->where(['order.user_id'=>$user_id])
            ->orderBy('order.created_at', 'desc')->paginate(10);
//        echo "<pre>";
//        print_r( $result['order']);
        return view('web_components.my_order',$result);
    }


}
