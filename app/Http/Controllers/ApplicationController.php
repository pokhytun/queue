<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){

        $admins = User::where('isAdmin' , 1)->withExists('isAdminActive')->get();
        $applications = Application::all();
        
        return view('applications' , compact('applications' , 'admins'));
    }

    public function create(Request $request){

        $adminId = User::where('isAdmin', 1)->pluck('id'); // id адмінів
        
        $workingAdminsId= Application::where('status' , 1)->get()->pluck('admin_id'); // id адмінів які обробляють заявки
        
        $freeAdmin = $adminId->diff($workingAdminsId); // id вільних адмінів

        $user = User::where('isAdmin', 1)->whereIn('id', $freeAdmin)->first(); // адмін якому призначається заявка

        $application = new Application;
        $application->user_id = Auth()->user()->id;
        $application->admin_id =  $user ? $user->id : null;
        $application->status = $user ? 1 : 0;
        $application->text = $request->text;
        $application->save();
        
        return redirect()->back();
    }

    public function edit($id){

        $app = Application::find($id);
        $app->status = 2;
        $app->save();

        
        if($nextApplications = Application::where('status' , 0)->first()){

            $nextApplications->status = 1;
            $nextApplications->admin_id = Auth()->user()->id;
            $nextApplications->save();

        }
    
        return redirect()->back();
    }

    public function show(Request $request){

        $application = Application::find($request->application_id);
        $view = view('includes.modal' , compact('application'))->render();
        return response()->json(['html' => $view]);

    }

    public function filterByStatus($id){
        $applications = Application::where('status' , $id)->get();

        $admins = User::where('isAdmin' , 1)->withExists('isAdminActive')->get();

        return view('applications' , compact('applications' , 'admins'));
    }

}
