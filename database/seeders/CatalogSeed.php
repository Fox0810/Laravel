<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Catalog;

class CatalogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Catalog::create ([
           'name'=>'Танцы'
       ]);
        Catalog::create ([
            'name'=>'Фитнес'
        ]);
        Catalog::create ([
            'name'=>'Здоровье'
        ]);
        Catalog::create ([
            'name'=>'Образование'
        ]);
        Catalog::create ([
            'parent_id'=>1,
            'name'=>'Индийский'
        ]);
        Catalog::create ([
            'parent_id'=>2,
            'name'=>'Зумба'
        ]);

    }
}
