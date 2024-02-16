<?php

namespace App\Helpers;

use Carbon\Carbon;
use Auth;
use App\Models\Module;

class Helpers {
    public static function find_module($module_id)
    {
        $module = Module::find($module_id);
        $module_name = $module->name;
        return $module_name;
    }
}