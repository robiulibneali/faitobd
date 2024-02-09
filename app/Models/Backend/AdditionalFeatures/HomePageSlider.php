<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomePageSlider extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'slider_file_type',
        'file',
        'file_url',
        'file_type',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'home_page_sliders';

    protected static $homePageSlider;

    public static function createOrUpdateHomePageSlider($request, $id = null)
    {
        if (isset($id))
        {
            self::$homePageSlider = HomePageSlider::find($id);
        } else {
            self::$homePageSlider = new HomePageSlider();
        }

        self::$homePageSlider->slider_file_type     = $request->slider_file_type;
        self::$homePageSlider->file_type            = $request->hasFile('file') ? $request->file('file')->getClientMimeType() : (isset($id) ? static::find($id)->file_type : null);
        self::$homePageSlider->file_url             = $request->file_url;
        self::$homePageSlider->file                 = fileUpload($request->file('file'), 'additional-features/home-page-slider', isset($id) ? static::find($id)->file : '');
        self::$homePageSlider->status               = $request->status == 'on' ? 1 : 0;
        self::$homePageSlider->save();
    }

    public static function deleteHomePageSlider($id)
    {
        self::$homePageSlider = HomePageSlider::find($id);
        if (file_exists(self::$homePageSlider->file))
        {
            unlink(self::$homePageSlider->file);
        }
        self::$homePageSlider->delete();
    }
}
