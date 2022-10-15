<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;

class MemberController extends Controller
{
    public function index()
    {
        echo "<pre>";
        print_r(Member::with('get_group')->get());
    }
    public function many_relationship()
    {
        echo "<pre>";
        print_r(Member::with('get_group_many')->get());
    }
}
