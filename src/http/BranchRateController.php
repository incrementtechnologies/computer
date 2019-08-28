<?php

namespace Increment\Computer\Http;

use App\Http\Controllers\APIController;
use Increment\Computer\Models\BranchRate;
class BranchRateController extends APIController
{
  function __construct(){  
    $this->model = new BranchRate();
  }
}