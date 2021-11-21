<?php

namespace App\Http\Controllers;

use App\Models\ProviderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    public function DashboardView()
    {
        return view('provider_components.dashboard');
    }

    public function LoginView(Request $request)
    {
            return view('provider_components.login');
    }

    public function RegisterView(Request $request)
    {
        return view('provider_components.register');
    }

    public function Registration(Request $request)
    {

        $rules=[
            'name'=>'required',
            'email'=>'required|unique:providers,email,'.$request->post('id'),
            'password'=>'required|min:8|string',
        ];
        $custom_message=[
            'name.required'=>'Please enter User Name',
            'email.required'=>'Please enter Email',
            'email.unique'=>'This Email already exist',
            'password.required'=>'Please enter password',
            'password.min'=>'Password Must be 8 character',

        ];
        $this->validate($request, $rules, $custom_message);



        $model = new ProviderModel();
        $model->name= $request->post('name');
        $model->email= $request->post('email');
        $model->password=Hash::make($request->post('password'));
        $model->status=1;
        $msg=" Registration Successfully ";
        $model->save();
        return back()->with('message',$msg);
    }

    public function LogIn(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

//        $result = AdminModel::where(['email'=>$email,'password'=>$password])->get();
        $result = ProviderModel::where(['email'=>$email])->first();
        if($result){
            if (Hash::check($request->post('password'),$result->password)){
                $request->session()->put('PROVIDER_LOGIN',true);
                $request->session()->put('PROVIDER_ID',$result->id);
                $request->session()->put('PROVIDER_NAME',$result->name);
                return redirect('provider/dashboard');
            }
            else{
                $request->session()->flash('error','Please enter valid password');
                return redirect('provider/login');
            }

        }
        else{
            $request->session()->flash('error','Please enter valid login information');
            return redirect('provider/login');
        }

    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('provider/login');
    }
}
