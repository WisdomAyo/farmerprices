<?php

namespace App\Http\Controllers\Admin;

use App\Categories as Category;
use App\Http\Controllers\Controller;
use App\Notifications;
use Illuminate\Http\Request;
use App\Http\Controllers\Helpers\NotificationHelpers;
use Auth;
use Validator;
use App\User;
use App\Agents;
use App\AgentsCategory;
use Carbon\Carbon;
use App\Orders;
use App\ProductTags as Tags;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getAdminIndex() {

        $category = Category::all()->count();
        $orders = Orders::all()->count();
        $tag = Tags::all()->count();

        return view('admin.dashboard',compact('category','orders','tag'));
    }


    public function AllUsers(){
        $user       = User::all();
        return view('admin.user.view-user')->withUser($user);
    }


    public function AddUser(){
        return view('admin.user.add-user');
    }

    public function AddAgents(){
        $category = Category::all();
        return view('admin.agents.add-agent',compact('category'));
    }
    public function AssignAgents(){
        $category = Category::all();
        $agent = Agents::all();
        return view('admin.agents.assign-agent',compact('category','agent'));
    }

    public function AllAgents(){
        $agent = Agents::paginate(5000);
        return view('admin.agents.all-agents',compact('agent'));
    }


    public function StoreAgents(Request $request){

        $validator = Validator::make($request->all(), [

            'email' =>'required|unique:users|max:255',

        ]);


        $Users                      =   new Agents;
        $Users->name                =   $request->name;
        $Users->agent_id            =   $request->agent_id;
        $Users->email               =   $request->email;

        $Users->save();

        return back()->withInput()->with('response','User Added Successfully');
    }


    public function storeAgentscategory(Request $request) {

        ///saving to notification categories

        $AgentId                      = $request->agentsid;
        for ($x = 0; $x < sizeof($AgentId); $x++) {

            $agentcheck =  count(AgentsCategory::where('agent_id',$AgentId[$x])->where('categories_id',$request->category)->get());
            if($agentcheck > 0){
                return back()->withInput()->with('response','Cant add an agent twice in the same category!!');
            }

            $catNot                     = new AgentsCategory;
            $catNot->agent_id           = $AgentId[$x];
            $catNot->categories_id      = $request->category;
            $catNot->save();
        }

        for ($x = 0; $x < sizeof($AgentId); $x++) {

            $catNot                     = Agents::find($AgentId[$x]);
            $catNot->status             = 1;
            $catNot->save();
        }


        return back()->withInput()->with('response','Agents Added Successfully');
    }





    public function ViewUsersProfile($id){
        $user       = User::where('id',$id)->get();
        return view('admin.user.profile',compact($user));
    }

    public function ViewChangePassword(){
        return view('admin.user.changepassword');
    }


    public function MyProfile(){
        $user       = User::where('id',auth()->user()->id)->get();
        return view('admin.user.profile',compact('user'));
    }


    public function StoreUser(Request $request){


        $validator = Validator::make($request->all(), [

            'email' =>'required|unique:users|max:255',
            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/' // must contain a special character
            ]
        ]);

        if ($validator->fails()) {
            return back()->withInput()->with('response', $validator->errors());
        }


        $name                   =   $request->name;
        $phone_number           =   $request->phone;
        $level                  =   $request->access_level;
        $address                =   $request->address;
        $email                  =   $request->email;
        $password               =   $request->password;
        $encrypt_pass           =   bcrypt($password);

        $Users                      =   new User;
        $Users->name                =   $name;
        $Users->phone               =   $phone_number;
        $Users->email               =   $email;
        $Users->address             =   $address;
        $Users->user_level          =   $level;
        $Users->password            =   $encrypt_pass;
        $Users->status_id           = 1;

        $Users->save();

        return back()->withInput()->with('response','User Added Successfully');
    }




    public function ChangeUserPassword(Request $request){


        $validator = Validator::make($request->all(), [

            'password' => [
                'required',
                'string',
                'min:10',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/' // must contain a special character
            ],
            'password_confirmation' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->with('response', $validator->errors());
        }

        $password                   =   $request->password;
        $encrypt_pass               =   bcrypt($password);

        $Users                      =   User::find(auth()->user()->id);
        $Users->password            =   $encrypt_pass;
        $Users->save();

        return back()->withInput()->with('response','User Added Successfully');
    }



    public function UpdateAccount(Request $request){


        $id                     =   $request->id;
        $firstname              =   $request->firstname;
        $lastname               =   $request->lastname;
        $phone_number           =   $request->phone;
        $address                =   $request->address;
        $email                  =   $request->email;

        $Users                    =   User::find($id);
        $Users->firstname         =   $firstname;
        $Users->lastname          =   $lastname;
        $Users->phone             =   $phone_number;
        $Users->email             =   $email;
        $Users->address           =   $address;

        $Users->save();

        return back()->withInput()->with('response','User Account Updated');
    }


    public function DisableUsers(Request $request) {
        $post                   = User::find($request->id);
        $post->status_id        = $request->user_status;
        $post->save();
        return back()->with('response','Updated Successfully');

    }





}

