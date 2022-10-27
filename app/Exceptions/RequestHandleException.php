<?php

namespace App\Exceptions;

use Exception;

class RequestHandleException extends Exception
{
    /**
     * Render the exception as an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
                'status' => 'error',
                'error' => $this->getMessage(),
                'status_code' => 400
        ]);
    }
}
