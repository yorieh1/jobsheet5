<?php

namespace App\Http\Resources;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $tambahan = "ini tambahan";
        return [
            //key -> $this->namaColumn
            'id' => $this->id,
            'title' => $this->title,
            'tambahan' => $tambahan,
        ];
    }


}
