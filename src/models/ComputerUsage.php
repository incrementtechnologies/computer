<?php

namespace Increment\Computer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\APIModel;
class ComputerUsage extends APIModel
{
    protected $table = 'computer_usages';
    protected $fillable = ['computer_id', 'account_id', 'start', 'end', 'charge'];
}