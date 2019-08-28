<?php

namespace Increment\Computer\Http;

use App\Http\Controllers\APIController;
use Increment\Computer\Models\Branch;
class BranchController extends APIController
{
  function __construct(){  
    $this->model = new Branch();
  }
}