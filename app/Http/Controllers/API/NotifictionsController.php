<?php

namespace App\Http\Controllers\API;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notifications;
use App\NotificationCategories;
use App\Http\Controllers\Helpers\NotificationHelpers;
use App\Http\Controllers\API\ApiResponseController as ResponseController;
use App\Agents;
use App\AgentsCategory;
use Carbon\Carbon;
use App\NotificationView;
use Validator;

class NotifictionsController extends ResponseController
{

    public function __construct()
    {
        $this->middleware('auth.basic');
    }

    public function GetAllNotification() {

        $result       =   Notifications::where('status_id', 1)->where('range_to','>',Carbon::now())->orderBy('id', 'DESC')->get();
        $allnotification        = array();
        foreach($result as $rows => $row) {
            $categoryID = $row->category_id;
            unset($row->slug);
            unset($row->expireIn);
            unset($row->category_id);
            $row['categories'] = NotificationCategories::where('notification_id', $row->id)
                ->join('categories as categories','notification_categories.categories_id','categories.id')
                ->select('notification_categories.*','categories.*')->get();
//            $row['agents'] = AgentsCategory::where('categories_id', $categoryID)
//                ->join('agents as agents','agents_categories.agent_id','agents.id')
//                ->select('agents_categories.*','agents.*')->get();


            $allnotification[] = $row;

        }

        if($result->isEmpty()){
            return response()->json(["success" => true,"message"=> "empty result or maybe they are disabled", "data" => NULL], NotificationHelpers::$success);

        }else {
            return response()->json(["success" => true,"message"=> "loaded successfully", "data" => $allnotification], NotificationHelpers::$success);
        }

    }


    public function GetNotificationforAgent($id){


        $agentID = Agents::where('agent_id',$id)->value('id');

        $agentCategory = AgentsCategory::where('agent_id', $agentID)
            ->join('notification_categories as notification_categories','agents_categories.categories_id','notification_categories.categories_id')
            ->select('agents_categories.*','notification_categories.*')->get();
        //return $agentCategory;
        if($agentCategory->isEmpty()){
            return response()->json(["success" => true,"message"=> "user not subscribed", "data" => NULL], NotificationHelpers::$success);
        }


        foreach ($agentCategory as $row){
            $result       =   Notifications::where('category_id', $row->categories_id)->where('range_to','>',Carbon::now())->orderBy('id', 'DESC')->get();
            foreach ($result as $row){
                unset($row->slug);
                unset($row->expireIn);
            }

            if($result->isEmpty()){
                return response()->json(["success" => true,"message"=> "empty result", "data" => NULL], NotificationHelpers::$success);

            }else {
                return response()->json(["success" => true,"message"=> "loaded successfully", "data" => $result], NotificationHelpers::$success);
            }


        }


    }


//    public function GetNotificationforAgent($id){
//
//        $agentID = Agents::where('agent_id',$id)->value('id');
//
//        $agentCategory = AgentsCategory::where('agent_id', $agentID)->get();
//        //return $agentCategory;
//        if($agentCategory->isEmpty()){
//            return response()->json(["success" => true,"message"=> "user not subscribed", "data" => NULL], NotificationHelpers::$success);
//        }
//
//        foreach ($agentCategory as $row){
//
//            $result       =   NotificationCategories::where('categories_id', $row->categories_id)
//                ->join('notifications as notifications','notification_categories.notification_id','notifications.id')
//                ->select('notification_categories.*','notifications.*')->get();
//
//            foreach($result as $rows => $row) {
//                unset($row->category_id);
//                unset($row->slug);
//                unset($row->expireIn);
//
//            }
//
//
//        }
//        if($result->isEmpty()){
//            return response()->json(["success" => true,"message"=> "empty result", "data" => NULL], NotificationHelpers::$success);
//
//        }else {
//            return response()->json(["success" => true,"message"=> "loaded successfully", "data" => $result], NotificationHelpers::$success);
//        }
//
//    }


    public function GetAgentCategory($id){

        $agentID = Agents::where('agent_id',$id)->value('id');

        $agentCategory = AgentsCategory::where('agent_id', $agentID)
            ->join('categories as categories','agents_categories.categories_id','categories.id')
            ->select('categories.*')->get();
        //return $agentCategory;

        if($agentCategory->isEmpty()){
            return response()->json(["success" => true,"message"=> "empty result", "data" => NULL], NotificationHelpers::$success);

        }else {
            return response()->json(["success" => true,"message"=> "loaded successfully", "data" => $agentCategory], NotificationHelpers::$success);
        }


    }



    public function registerNotificationView(Request $request)
    {
        //validate incoming request

        $rules = [
            'agent_id' =>'required|string',
            'notification_id' =>'required|string',];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }


        // validating email account

        $input = $request->all();
        $check = count(NotificationView::where('agent_id',$input['agent_id'])->where('notification_id',$input['notification_id'])->get());
        if($check > 0) {
            $success['user'] =  $input;
            return $this->sendResponse($success, 'User register successfully.');
        }else {
            $user = NotificationView::create($input);
            $success['user'] =  $user;
            return $this->sendResponse($success, 'User register successfully.');
        }




    }


}
