<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Models\Catalog;


class AppComposer{
    public function compose(View $view){
        $parents=Catalog::whereNull('parent_id')->get();
        $view->with('parents', $parents);

    }
}
