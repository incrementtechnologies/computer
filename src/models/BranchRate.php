<?php

namespace Increment\Computer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\APIModel;
class BranchRate extends APIModel
{
    protected $table = 'branches';
    protected $fillable = ['branch_id', 'price', 'setting'];
}