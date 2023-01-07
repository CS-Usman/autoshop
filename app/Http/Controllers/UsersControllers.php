<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\userInfos;



class UsersControllers extends Controller
{
    public function loginDisplay(){
        return view('loginPage');
    }
    public function signInDisplay(){
        return view('signIn');
    }
    public function createUser(Request $request){
        $data = new userInfos;
        $data->name=$request->username;
        $data->email=$request->usermail;
        $data->password=$request->userpass;
        $data->address=$request->useraddress;
        $data->cart=[];
        $data->save();

        return redirect("/");
    }

    public function loginUser(Request $request){
        
        $email= $request->input('username');
        $pass= $request->input('pass');

        $user = userInfos::where('email',$email)->first();
        if(is_null($user)){
            return("Account not exist, sign up first! ");
            
        }
        else{
            if($user->password == $pass){
                $request->session()->put('email',$user->email);
                return redirect('/homepage');
            }
            else{
                return("password not correct");
            }
        }
    }

    public function homepageDisplay(){
        $data = Admin::all();
        return view('homepage')->with(['data'=>$data]);
    }

    public function accountDisplay(Request $request){
        if($request->session()->has('email')){
            $email = $request->session()->get('email');
            $user = userInfos::where('email',$email)->first();
            return view('account')->with(['data'=>$user]);
        }
        else{
            return ('Not logged in');
        }

    }

    public function viewUpdate($id){
        $user=userInfos::find($id);
        return view('editAccount')->with(['data'=>$user]);
    }

    public function updateUser(Request $request,$id){
        $user = userInfos::find($id);
        
        $user->name = $request->get('username');
        $user->email = $request->get('usermail');
        $user->password = $request->get('userpass');
        $user->address = $request->get('useraddress');
        
        $request->session()->forget('email');
        $request->session()->put('email',$user->email);

        $user->save();
        return redirect('/homepage');

    }
    public function deleteUser(Request $request,$id){
        $request->session()->forget('email');
        $user = userInfos::find($id)->delete();
        return redirect('/');
    }

    


    public function logoutUser(Request $request){
        $request->session()->forget('email');
        return redirect("/");
    }

    public function addToCart($id,Request $request){
        $item = Admin::find($id);
        if($request->session()->has('email')){
            $email = $request->session()->get('email');
            $user = userInfos::where('email',$email)->first();
            
            $temp_cart = $user->cart;
            array_push($temp_cart,$item);
            $user->cart = $temp_cart;

            $user->save(); 

            return view('cart')->with(['data'=>$user]);

        }
    }

    public function viewCart(Request $request)
    {
        if($request->session()->has('email')){
            $email = $request->session()->get('email');
            $user = userInfos::where('email',$email)->first();
            return view('cart')->with(['data'=>$user]);
        }
       
    }

    public function removeItemFromCart($user_id,$item_id){
        $user = userInfos::find($user_id);
        echo($item_id);
        $tmp_cart = $user->cart;
        $index = array_search($item_id,$tmp_cart);
        array_splice($tmp_cart,$index,1);
        
        $user->cart = $tmp_cart;
        $user->save();
        
        return redirect("/cart");
       
    }

    public function buyItem(Request $request,$item_id,$user_id)
    {
        
        $item = Admin::find($item_id);
        $user = userInfos::find($user_id);

        $tmp_cart = $user->cart;
        $index = array_search($item_id,$tmp_cart);
        array_splice($tmp_cart,$index,1);
        
        $user->cart = $tmp_cart;
        $user->save();
        
        $itemQty = $request->get('qty');
        $price = $item->Price;
        $amount = $itemQty * $price;
        return view('greetUser')->with(['amount'=>$amount]);
        
    }

    public function viewBuyItem($item_id,$user_id)
    {
        $item = Admin::find($item_id);
        $user = userInfos::find($user_id);
        return view("buyItem")->with(['item'=>$item,'data'=>$user]);
    }
}

