<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function profile(){
       if(auth()->check()){
           $userId=auth()->id();
           $orders=Order::where('user_id',$userId)->get();

           return view('pages.profile',compact('orders'));
       }
       return back();
   }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editPass()
    {

        return view('pages/editpass');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePass(Request $request)
    {

        if (Auth::Check()) {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if ($validator->fails()) {
                // return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
                return back()->with('error', $validator->getMessageBag()->toArray());
            } else {
                $current_password = Auth::User()->password;
                if (Hash::check($request_data['current-password'], $current_password)) {
                    $user_id = Auth::User()->id;
                    $obj_user = User::find($user_id);
                    $obj_user->password = Hash::make($request_data['password']);;
                    $obj_user->save();
                    return back()->with('success', 'رمز عبور شما با موفقیت ويرايش شد');
                } else {
                    $error = array('current-password' => 'Please enter correct current password');
                    return back()->with('error', $error);
                }
            }
        } else {
            return back();
        }

    }
    /**
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function admin_credential_rules(array $data)
    {
        $messages = [
            'current-password.required' => 'Please enter current password',
            'password.required' => 'Please enter password',
        ];

        $validator = Validator::make($data, [
            'current-password' => 'required',
            'password' => 'required|same:password',
            'password_confirmation' => 'required|same:password',
        ], $messages);

        return $validator;
    }
}
