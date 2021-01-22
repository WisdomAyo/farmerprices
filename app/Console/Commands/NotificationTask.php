<?php

namespace App\Console\Commands;

use App\Categories as Category;
use App\Notifications;
use Carbon\Carbon;
use Illuminate\Console\Command;
use DateTime;

class NotificationTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notificationtask:notice';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */


    public function getallNotification() {
        $cat =  Notifications::select('*')->where('status_id',0)->get();
        return $cat;
    }


    public function DisableNotification() {
        $cat =  Notifications::select('*')->where('status',1)->get();
        return $cat;
    }

    public function RunActive(){
        $notification           = $this->getallNotification();
        for ($x = 0; $x < sizeof($notification); $x++) {

            $currentdate = Notifications::where('id',$notification[$x]['id'])->value('range_from');
            /// THIS IS GETTING DATE ////
            $date = $currentdate; $dt = new DateTime($date); /// TIME FROM DB ///
            $date2 = Carbon::now(); $dt2 = new DateTime($date2); /// CURRENT DATE NOW() //

            ///// END OF IT//////
            $time = $currentdate; $tt = new DateTime($time);
            $time2 = Carbon::now(); $tt2 = new DateTime($time2); /// CURRENT TIME NOW() //

            //// THIS IS GETTING TIME ///


            $RangeFromDate = $dt->format('Y-m-d');
            $CurrentDateNow = $dt2->format("Y-m-d");
            $RangeFromDateTIME = $tt->format("h:i");
            $CurrentDateNowTIME = $tt2->format("h:i");

            if($RangeFromDate === $CurrentDateNow) {

                if($RangeFromDateTIME === $CurrentDateNowTIME){

                    $id                             = $notification[$x]['id'];
                    $post                           = Notifications::find($id);
                    $post->status_id                = 1;
                    $post->save();
                }


            }



        }
    }

    public function RunDisable() {
        $disableNotification    = $this->DisableNotification();

        for ($x = 0; $x < sizeof($disableNotification); $x++) {

            $currentdate = Notifications::where('id',$disableNotification[$x]['id'])->value('range_to');
            /// THIS IS GETTING DATE ////
            $date = $currentdate; $dt = new DateTime($date); /// TIME FROM DB ///
            $date2 = Carbon::now(); $dt2 = new DateTime($date2); /// CURRENT DATE NOW() //

            ///// END OF IT//////
            $time = $currentdate; $tt = new DateTime($time);
            $time2 = Carbon::now(); $tt2 = new DateTime($time2); /// CURRENT TIME NOW() //

            //// THIS IS GETTING TIME ///


            $RangeFromDate = $dt->format('Y-m-d');
            $CurrentDateNow = $dt2->format("Y-m-d");
            $RangeFromDateTIME = $tt->format("h:i");
            $CurrentDateNowTIME = $tt2->format("h:i");

            if($RangeFromDate === $CurrentDateNow) {

                if($RangeFromDateTIME === $CurrentDateNowTIME){

                    $id                             = $disableNotification[$x]['id'];
                    $post                           = Notifications::find($id);
                    $post->status_id                = 2;
                    $post->save();
                }


            }



        }
    }


    public function handle()
    {
        $this->RunActive();
        $this->RunDisable();



    }
}
