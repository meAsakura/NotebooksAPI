<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use GuzzleHttp;

class ListofNotebooksController extends Controller
{
    public function list_of_notebooks() {
        $request = Request::create('/api/v1/notebooks', 'GET');
        $instance = json_decode(Route::dispatch($request)->getContent());
        if (empty($instance->result->data))
            return redirect()->route('control')->withErrors(['Error' => $instance->error]);
        echo view('table', ['instance' => $instance->result->data]); 
    }

    public function get_notebook_by_id(Request $request) {
        $request = Request::create('/api/v1/notebook', 'POST');
        $instance = json_decode(Route::dispatch($request)->getContent());
        if (empty($instance->result))
            return redirect()->route('control')->withErrors(['Error' => $instance->error]);
        echo view('table', ['instance' => $instance->result]);
    }

    public function notebook_delete_by_id() {
        $request = Request::create('/api/v1/notebook_delete', 'DELETE');
        $instance = json_decode(Route::dispatch($request)->getContent());
        if (isset($instance->status_code)) {
            switch($instance->status_code) {
                case 400:
                    return redirect()->route('control')->withErrors(['Error' => $instance->error]);
                
                case 200:
                    return redirect()->route('control')->withErrors(['Success' => $instance->response]);
            }
        }
        #if ($instance->status_code == '400') {
            #return redirect()->route('control')->withErrors(['Error' => ['BAD REQUEST, There is no user with id']]);
        #}
        #return redirect()->route('control');
    }
}
