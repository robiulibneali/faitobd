<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Backend\PartsManagement\PartsProduct;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketVerdor extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'logo', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'market_verdors';

    protected static $marketVerdor;

    public static function createOrUpdateMarketVerdor($request, $id = null)
    {
        if (isset($id))
        {
            self::$marketVerdor = MarketVerdor::find($id);
        } else {
            self::$marketVerdor = new MarketVerdor();
        }

        self::$marketVerdor->name       = $request->name;
        self::$marketVerdor->logo       = fileUpload($request->file('logo'), 'additional-features/market-vendor', isset($id) ? static::find($id)->logo : '');
        self::$marketVerdor->status     = $request->status == 'on' ? 1 : 0;
        self::$marketVerdor->save();
    }

    public static function deleteMarketVerdor($id)
    {
        self::$marketVerdor = MarketVerdor::find($id);
        if (file_exists(self::$marketVerdor->logo))
        {
            unlink(self::$marketVerdor->logo);
        }
        self::$marketVerdor->delete();
    }

    public function partsProducts()
    {
        return $this->belongsToMany(PartsProduct::class)->withPivot('market_verdor_id', 'parts_product_id', 'link');
    }
}
