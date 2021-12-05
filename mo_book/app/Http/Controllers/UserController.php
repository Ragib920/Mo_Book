<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function LoginView(Request $request)
    {
        return view('web_components.login');
    }

    public function RegisterView(Request $request)
    {
        return view('web_components.register');
    }

    public function Registration(Request $request)
    {

        $rules=[
            'name'=>'required',
            'email'=>'required|unique:user,email,'.$request->post('id'),
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

        $model = new UserModel();
        $model->name= $request->post('name');
        $model->email= $request->post('email');
        $model->u_phone= $request->post('u_phone');
        $model->u_address= $request->post('u_address');
        $model->password=Hash::make($request->post('password'));
        $model->status=1;
        $msg=" Registration Successfully ";
        $model->save();
        return redirect('user/login')->with('message',$msg);
    }

    public function LogIn(Request $request)
    {
        $email=$request->post('email');
        $password=$request->post('password');

//        $result = AdminModel::where(['email'=>$email,'password'=>$password])->get();
        $result = UserModel::where(['email'=>$email])->first();
        if($result){
            if (Hash::check($request->post('password'),$result->password)){
                $request->session()->put('USER_LOGIN',true);
                $request->session()->put('USER_ID',$result->id);
                $request->session()->put('USER_NAME',$result->name);
                return redirect('/');
            }
            else{
                $request->session()->flash('error','Please enter valid password');
                return redirect('user/login');
            }

        }
        else{
            $request->session()->flash('error','Please enter valid login information');
            return redirect('user/login');
        }

    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
