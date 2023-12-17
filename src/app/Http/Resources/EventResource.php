<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Event */
class EventResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'text' => $this->text,
            'user_id' => $this->user_id,
            'member_ids' => $this->member_ids,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
