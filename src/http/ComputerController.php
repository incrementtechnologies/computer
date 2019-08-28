<?php

namespace Increment\Computer\Http;

use App\Http\Controllers\APIController;
use Increment\Computer\Models\Computer;
class ComputerController extends APIController
{
  function __construct(){  
    $this->model = new Computer();
  }
}