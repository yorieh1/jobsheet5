<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            //key -> $this->namaColumn
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'writer' => $this->writer->username,
        ];
    }

}
