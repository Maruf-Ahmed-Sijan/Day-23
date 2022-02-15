<?php


namespace App\classes;


class Category
{
    public function index()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'Home',

            ],

            2=>[
                'id'=>2,
                'name'=>'File Upload',

            ],

            3=>[
                'id'=>3,
                'name'=>'File write',

            ],


        ];
    }
}