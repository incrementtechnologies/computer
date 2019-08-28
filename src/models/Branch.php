<?php

namespace Increment\Computer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\APIModel;
class Branch extends APIModel
{
    protected $table = 'branches';
    protected $fillable = ['code', 'account_id', 'account_id', 'name', 'location'];
}