<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ShortlinkRepositoryInterface;
use Illuminate\Http\Request;

class ShortlinkController extends Controller
{

    public function __construct(protected ShortlinkRepositoryInterface $shortlinkRepository)
    {
        
    }
    public function getAll()
    {
        return $this->shortlinkRepository->getAll();
    }
    public function getByUser(Request $request)
    {
        return $this->shortlinkRepository->byUser($request);
    }
}
