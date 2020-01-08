<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserModel;

class IndexController extends Controller
{
    $u = UserModel::all();
    var_dump($u);
}
