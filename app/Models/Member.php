<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public function get_group()
    {
        return $this->hasOne('App\Models\Group', 'id');
    }
    public function get_group_many()
    {
        return $this->hasMany('App\Models\Group', 'id', 'group_id');
    }
}
