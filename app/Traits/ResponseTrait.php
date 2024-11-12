<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseTrait {

    /**
     * Success Response
     * @param array|object $data
     * @param string $message
     * 
     * @return JsonResponse
     */
    public function successResponse($data, $message = "Success") : JsonResponse
    {
        return response()->json([
            'status'    => true,
            'data'      => $data,
            'message'   => $message,
            'errors'    => null,
        ]);
    }

    /**
     * Error Response
     * @param array|object $errors
     * @param string $message
     * 
     * @return JsonResponse
     */
    public function errorResponse($errors, $message = "Error") : JsonResponse
    {
        return response()->json([
            'status'    => false,
            'data'      => null,
            'message'   => $message,
            'errors'    => $errors,
        ]);
    }
}

?>