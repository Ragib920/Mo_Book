<?php

namespace App\Http\Controllers;

use App\Models\CateringModel;
use App\Models\DecorationModel;
use App\Models\DetailsModel;
use App\Models\LightingModel;
use App\Models\PhotographyModel;
use App\Models\ProviderModel;
use App\Models\Sound_systemModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function indexView()
    {
        $result['catering']=  DB::table('catering')
            ->leftJoin('details','details.id','=','catering.provider_id')
            ->where(['catering.status'=>1])
            ->orderBy('catering.id', 'desc')->paginate(6);
//        echo "<pre>";
//        print_r( $result['catering']);

        $result['photography']= DB::table('photography')
            ->leftJoin('details','details.id','=','photography.provider_id')
            ->where(['photography.status'=>1])
            ->orderBy('photography.id', 'desc')->paginate(6);

        $result['decoration']= DB::table('decoration')
            ->leftJoin('details','details.id','=','decoration.provider_id')
            ->where(['decoration.status'=>1])
            ->orderBy('decoration.id', 'desc')->paginate(6);

        $result['lighting']=DB::table('lighting')
            ->leftJoin('details','details.id','=','lighting.provider_id')
            ->where(['lighting.status'=>1])
            ->orderBy('lighting.id', 'desc')->paginate(6);

        $result['sound_system']=DB::table('sound_system')
            ->leftJoin('details','details.id','=','sound_system.provider_id')
            ->where(['sound_system.status'=>1])
            ->orderBy('sound_system.id', 'desc')->paginate(6);

        return view('web_components.index',$result);
    }

    public function AllCateringView(Request $request)
    {
        $result['catering']=  DB::table('catering')
            ->leftJoin('details','details.id','=','catering.provider_id')
            ->where(['catering.status'=>1])
            ->orderBy('catering.id', 'desc')->paginate(21);
        return view('web_components.catering',$result);
    }

    public function AllPhotographyView(Request $request)
    {
        $result['photography']= DB::table('photography')
            ->leftJoin('details','details.id','=','photography.provider_id')
            ->where(['photography.status'=>1])
            ->orderBy('photography.id', 'desc')->paginate(21);
        return view('web_components.photography',$result);
    }

    public function AllDecorationView(Request $request)
    {
        $result['decoration']= DB::table('decoration')
            ->leftJoin('details','details.id','=','decoration.provider_id')
            ->where(['decoration.status'=>1])
            ->orderBy('decoration.id', 'desc')->paginate(21);
        return view('web_components.decoration',$result);
    }

    public function AllLightingView(Request $request)
    {
        $result['lighting']=DB::table('lighting')
            ->leftJoin('details','details.id','=','lighting.provider_id')
            ->where(['lighting.status'=>1])
            ->orderBy('lighting.id', 'desc')->paginate(21);
        return view('web_components.lighting',$result);
    }

    public function AllSoundSystemView(Request $request)
    {
        $result['sound_system']=DB::table('sound_system')
            ->leftJoin('details','details.id','=','sound_system.provider_id')
            ->where(['sound_system.status'=>1])
            ->orderBy('sound_system.id', 'desc')->paginate(21);
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
        $result['data']= DetailsModel::find($id);
        $result['provider']= ProviderModel::find($id);
        $result['catering']= CateringModel::where(['provider_id'=>$id])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['photography']= PhotographyModel::where(['provider_id'=>$id])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['lighting']= LightingModel::where(['provider_id'=>$id])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['decoration']= DecorationModel::where(['provider_id'=>$id])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();
        $result['sound_system']= Sound_systemModel::where(['provider_id'=>$id])
            ->where(['status'=>1])
            ->orderBy('created_at', 'desc')
            ->get();






        return view('web_components.company_details',$result);
    }

}
