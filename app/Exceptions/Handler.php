<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function(NotFoundHttpException $e,$request) {
            if($request->is('api/departments/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'the selected id is invalid'
                ],404);
            }
            if($request->is('api/employees/*')){
                return response()->json([
                    'status' => false,
                    'message' => 'the selected id is invalid'
                ],404);
            }
        });
    }
}
