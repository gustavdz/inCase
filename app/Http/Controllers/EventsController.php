<?php

namespace App\Http\Controllers;

use App\Events;
use App\Http\Requests\eventOwnershipRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{

    public function index(){
        $user = User::find(Auth::user()->id);
        $events = Events::where('user_id','=',$user->id)->get();
        return view('events.index')->with(compact('user','events'));
    }

    public function get($id){
        $event = Events::find($id);
        return $event;
    }

    public function update_event($id, Request $request){
        $events = $this->get($id);
        $events->fill($request->all())->save();
        return $events;
    }

    public function drop_event($id, Request $request){
        $events = $this->get($id);
        $events->fill($request->all())->save();
        return $events;
    }

    public function resize_event($id, Request $request){
        $events = $this->get($id);
        $events->fill($request->all())->save();
        return $events;
    }

    public function delete_event($id, eventOwnershipRequest $request){
        try{
            $user = User::find(Auth::user()->id);
            DB::beginTransaction();
            $evento = Events::where('user_id','=',$user->id)
                ->andWhere('id','=',$id)
                ->get();
            $evento->delete();
            DB::commit();
        }catch (\Exception $e){
            DB::rollBack();
            return back()->with('notification',['title'=>'Notificación','message'=>'Ocurrió un error al eliminar el proyecto','alert_type'=>'danger']);
        }
        return back()->with('notification',['title'=>'Notificación','message'=>'Se eliminó el proyecto correctamente','alert_type'=>'warning']);

    }

    public function add_event(Request $request){
        $user = User::find(Auth::user()->id);
        $event_request=$request->only('title', 'description', 'start', 'end' , 'allDay', 'className');
        $event_request['user_id']=$user->id;
        $event = Events::create($event_request);
        return $event;
    }
}
