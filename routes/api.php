<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Exceptions\RequestHandleException;

// get /v1/notebooks return json of notebooks 
Route::get('/v1/notebooks', function(Request $request) {
    $notebooks = DB::table('notebooks')->get();
    return response()->json([
        'message' => 'success',
        'result' => array(
            'data' => $notebooks
        ),
        'requested_id' => $request->number,
        'status_code' => 200
    ]);
})->name('listofNotebooks');


Route::post('/v1/notebook', function(Request $request) {
    if (!isset($request->number)) {
        return throw new RequestHandleException('Invalid input. ID not set');
    }

    $notebook = DB::table('notebooks')
    ->find($request->number);

    if (empty($notebook)) {
        return throw new RequestHandleException('Invalid input or user was delete');
    }

    return response()->json([
        'status' => 'success',
        'result' => array(
            'data' => $notebook
        ),
        'requested_id' => $request->number,
        'status_code' => 200
    ]);
})->name('notebookById');

Route::DELETE('/v1/notebook_delete', function(Request $request) {
    if (!isset($request->number)) {
       return throw new RequestHandleException('Invalid input. ID not set');
    }

    $notebook = DB::table('notebooks')
    ->find($request->number);

    if (empty($notebook)) {
        return throw new RequestHandleException('Invalid input or user was delete');
    }

    $notebook = DB::table('notebooks')
    ->where('id', $request->number)
    ->delete();

    if ($notebook) {
        return response()->json([
            'status' => 'success',
            'response' => 'notebook was deleted',
            'requested_id' => $request->number,
            'status_code' => 200
        ]);
    }
})->name('delete');