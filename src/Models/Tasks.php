<?php

namespace Debian\MvcTemplate\Models;

use Debian\MvcTemplate\Models\Model;
use Debian\MvcTemplate\Database\Connection;

class Tasks  extends Model
{

    protected string $table = "Tasks";
    protected string $query;
}