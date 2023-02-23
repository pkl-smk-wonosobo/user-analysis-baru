<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class resourcesGrupAnalyst extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ID'=>$this->id,
            'GEJALA'=>$this->title,
            'NAMA'=>$this->name,
            'NO. PENYAKIT'=>$this->analyst_id
        ];
    }
}
