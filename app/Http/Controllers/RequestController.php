<?php

namespace Anison\Http\Controllers;

use Illuminate\Http\Request;
use Anison\Requests;

class RequestController extends Controller
{
    public function index() {
        $requests = Requests::all();

        return view('requests')->with('requests', $requests);
    }

    public function submit(Request $request){
        $this->validate($request, [
            'song' => 'required',
            'anime' => 'required',
            'link' => 'required',
        ]);

        // Create new request
        $requests = new Requests;
        $requests->song = $request->input('song');
        $requests->anime = $request->input('anime');
        $requests->link = $request->input('link');

        // Save request
        $requests->save();

        // Redirect
        return redirect('/')
                ->with('success1', 'Your request has been received!')
                ->with('inputsong', $request->input('song'))
                ->with('inputanime', $request->input('anime'))
                ->with('inputlink', $request->input('link'));
    }
}
