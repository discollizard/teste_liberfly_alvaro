<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(title="Teste LiberFly Álvaro", version="1.0")
 */

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
