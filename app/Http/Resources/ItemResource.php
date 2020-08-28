<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SubcategoryResource;
use App\Subcategory;
use App\Http\Resources\BrandResource;
use App\Brand;
class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap='item';//model name

    public function toArray($request)
    {
        //return parent::toArray($request);
        return[
            "item_id"=>$this->id,
            "item_name"=>$this->name,
            "item_price"=>$this->price,
            "item_desc"=>$this->description,
            "brand"=>new BrandResource(Brand::find($this->brand_id)),
            "subcategory"=>new SubcategoryResource(Subcategory::find($this->subcategory_id)),
        ];
    }
}
