<?php

namespace App\Models\Backend\PartsManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartsBrandCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'parts_parent_brand_id',
        'parts_brand_category_id',
        'name',
        'image',
        'description',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'parts_brand_categories';

    protected static $bikeBrands;

    public static function saveOrUpdatePartsBrandCategory($request, $id = null)
    {
        PartsBrandCategory::updateOrCreate(['id' => $id], [
            'parts_parent_brand_id'   => $request->parts_parent_brand_id,
            'parts_brand_category_id' => $request->parts_brand_category_id ?? 0,
            'name'                    => $request->name,
            'description'             => $request->description,
            'image'                   => fileUpload($request->file('image'), 'parts-management/parts-brand-category', isset($id) ? static::find($id)->image : ''),
            'status'                  => $request->status == 'on' ? 1 : 0,
        ]);
    }

    public function partsParentBrand()
    {
        return $this->belongsTo(PartsParentBrand::class);
    }

    public function partsBrandCategory()
    {
        return $this->belongsTo(PartsBrandCategory::class);
    }

    public function partsBrandCategories()
    {
        return $this->hasMany(PartsBrandCategory::class);
    }

    public function partsProducts()
    {
        return $this->hasMany(PartsProduct::class);
    }
}
