<?php namespace App\Http\Controllers;

use Dingo\Api\Http\Request;
use Dingo\Api\Routing\Helpers;

use Symfony;


class BackendController extends Controller
{

    /**
     * @param Request $request
     * @return mixed
     */
    public function index (Request $request)
    {
        $user = app('Dingo\Api\Auth\Auth')->user();

        return $user;
    }
}