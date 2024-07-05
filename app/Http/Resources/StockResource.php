<?php

namespace App\Http\Resources;

use App\Models\Attribute;
use App\Models\Value;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StockResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $result = [
            "quantity" => $this->quantity,
        ];

        $attributes = json_decode($this->attributes);

        foreach ($attributes as $StockAttribute) {
            $attribute = Attribute::find($StockAttribute->attribute_id);
            $value = Value::find($StockAttribute->value_id);

            $translations = json_decode($value->name, true);

            $result[$attribute->name] = [
                "uz" => $translations['uz'] ?? '',
                "ru" => $translations['ru'] ?? ''
            ];
        }

        return $result;
    }



}
