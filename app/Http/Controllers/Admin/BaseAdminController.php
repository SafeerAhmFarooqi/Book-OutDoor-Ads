<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;

class BaseAdminController extends AdminController
{
    public function __construct() {
        $this->loadDefaultData();
    }

    protected function loadDefaultData(array $params=[]){
        //$this->headTitle = 'T-Commission';
        //$this->activeApp = config('constants.APPLICATIONS.TCOMMISSION.KEY');

        // calling the parent method to set the global variables
        parent::loadDefaultData($params);
    }
}