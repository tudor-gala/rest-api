<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AudioTrackResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'artist' => $this->artist,
            'title' => $this->title,
            'release_year' => $this->release_year,
            'age' => date('Y') - $this->release_year,
        ];
    }
}
