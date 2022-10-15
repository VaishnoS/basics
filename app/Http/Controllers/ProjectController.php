<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class ProjectController extends Controller
{
    public function index(Group $id)
    {
        return $id;
    }
}
