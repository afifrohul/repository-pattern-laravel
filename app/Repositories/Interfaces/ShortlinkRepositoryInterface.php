<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;


interface ShortlinkRepositoryInterface
{
    public function getAll();
    public function byUser(Request $request);

}