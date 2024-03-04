<?php

namespace App\Repositories;

use App\Http\Resources\ShortlinkUserResource;
use App\Models\Shortlink;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ShortlinkRepositoryInterface;


class ShortlinkRepository implements ShortlinkRepositoryInterface
{
    public function getAll()
    {
        $shortlink = Shortlink::query()
        ->select('id', 'code', 'link', 'user_id', 'created_at', 'updated_at')
        ->paginate(10);
        return ShortlinkUserResource::collection($shortlink);
    }
    
    public function byUser(Request $request)
    {
        $shortlink = Shortlink::query()
        ->select('id', 'code', 'link', 'user_id', 'created_at', 'updated_at')
        ->where('user_id', $request->id)
        ->paginate(10);
        return ShortlinkUserResource::collection($shortlink);
    }
}