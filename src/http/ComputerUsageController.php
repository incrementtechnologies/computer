<?php

namespace Increment\Computer\Http;

use App\Http\Controllers\APIController;
use Increment\Computer\Models\ComputerUsage;
class ComputerUsageController extends APIController
{
  function __construct(){  
    $this->model = new ComputerUsage();
  }
}