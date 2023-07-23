<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Library\helper;

class LoginController extends Controller
{
    public function index(Request $request)
    {
          if ($request->isMethod('post')){
              $this->validate($request, [
                  'admin_id' => 'required',
                  'password' => 'required'

              ], [
                  'admin_id.required' => 'Employee Id is Required',
                  'password.required' => 'Password is Required'
              ]);

              dd('ho ');
              $admin = Admin::where('admin_id',$request->admin_id)->Where('password', $request->password)->first();
              if (!$admin)
                  return redirect()->back()->with(['error' => 'Invalid Username or Tracking ID']);

              if($request->password != $admin->password)
                  return redirect()->back()->with(['error'=> 'Password is Not Match with Username!']);

              \Session::put('admin', $admin);

              Admin::where('id',$admin->id)->update([
                  'last_logged_in_ip' => Helper::getClientIp(),
                  'last_logged_in_at' => Carbon::now()
              ]);

              return redirect()->route('emp-dashboard')->with([
                  'success' => 'Welcome to'. $admin->name .' account'
              ]);
          }
        return view('admin-panel.authentication.login');
    }

    public function forgetPassword()
    {
        return view('admin-panel.authentication.forget-password');
    }

    public function logout()
    {
        \Session::forget('admin');
        return redirect()->route('emp-login');
    }
}
