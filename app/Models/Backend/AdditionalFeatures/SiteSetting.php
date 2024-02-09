<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiteSetting extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'title',
        'description',
        'menu_logo',
        'favicon',
        'footer_logo',
        'default_seo_header',
        'default_seo_footer',
        'fb_link',
        'tiktok_link',
        'insta_link',
        'youtube_link',
        'helpline_number',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'site_settings';

    public static function saveOrUpdateSiteSetting($request, $id = null)
    {
        SiteSetting::updateOrCreate(['id' => $id], [
            'name'                 => $request->name,
            'title'                => $request->title,
            'description'          => $request->description,
            'helpline_number'      => $request->helpline_number,
            'default_seo_header'   => $request->default_seo_header,
            'default_seo_footer'   => $request->default_seo_footer,
            'fb_link'              => $request->fb_link,
            'tiktok_link'          => $request->tiktok_link,
            'insta_link'           => $request->insta_link,
            'youtube_link'         => $request->youtube_link,
            'favicon'              => fileUpload($request->file('favicon'), 'additional-features/site-settings/favicon', isset($id) ? static::find($id)->favicon : ''),
            'menu_logo'            => fileUpload($request->file('menu_logo'), 'additional-features/site-settings/menu-logo', isset($id) ? static::find($id)->menu_logo : ''),
            'footer_logo'          => fileUpload($request->file('footer_logo'), 'additional-features/site-settings/footer-logo', isset($id) ? static::find($id)->footer_logo : ''),
            'status'               => 1
        ]);
    }
}
