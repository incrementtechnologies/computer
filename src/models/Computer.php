<?php

namespace Increment\Computer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\APIModel;
class Computer extends APIModel
{
    protected $table = 'computers';
    protected $fillable = ['code', 'account_id', 'branch_id', 'status', 'online', 'ip_address'];
}