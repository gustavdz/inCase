<?php

namespace App\Http\Controllers;

use App\Meetings;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\MeetingOwnershipRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MeetingsController extends Controller
{
    public function index(){
        $user = User::find(Auth::user()->id);
        $meetings = Meetings::where('user_id','=',$user->id)->get();
        return view('meetings.index')->with(compact('user','meetings'));
    }

    public function get($id){
        $meeting = Meetings::find($id);
        return $meeting;
    }

    public function update_meeting($id, Request $request){
        $meetings = $this->get($id);
        $meetings->fill($request->all())->save();
        return $meetings;
    }

    public function drop_meeting($id, Request $request){
        $meetings = $this->get($id);
        $meetings->fill($request->all())->save();
        return $meetings;
    }

    public function resize_meeting($id, Request $request){
        $meetings = $this->get($id);
        $meetings->fill($request->all())->save();
        return $meetings;
    }

    public function delete_meeting($id, MeetingOwnershipRequest $request){
        try{
            $user = User::find(Auth::user()->id);
            DB::beginTransaction();
            $meeting = Meetings::where('user_id','=',$user->id)
                ->andWhere('id','=',$id)
                ->get();
            $meeting->delete();
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            return back()->with('notification',['title'=>'Notificación','message'=>'Ocurrió un error al eliminar el proyecto','alert_type'=>'danger']);
        }
        return back()->with('notification',['title'=>'Notificación','message'=>'Se eliminó el proyecto correctamente','alert_type'=>'warning']);

    }

    public function add_meeting(Request $request){
        $user = User::find(Auth::user()->id);
        $meeting_request=$request->only('title', 'description', 'start', 'end' , 'allDay', 'className');
        $meeting_request['user_id']=$user->id;
        $meeting = Meetings::create($meeting_request);
        return $meeting;
    }
}
