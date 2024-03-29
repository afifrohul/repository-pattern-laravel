<?php

namespace App\Http\Controllers;

use App\Models\Shortlink;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ShortlinkRepositoryInterface;

class ShortlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(protected ShortlinkRepositoryInterface $shortlinkRepository)
    {
        
    }
    
    public function index()
    {
        return $this->shortlinkRepository->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Shortlink $shortlink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shortlink $shortlink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shortlink $shortlink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shortlink $shortlink)
    {
        //
    }
}
