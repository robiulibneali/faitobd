<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Backend\BikeManagement\MotorBike;
use App\Models\Backend\PartsManagement\PartsProduct;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'user_name',
        'user_image',
        'user_designation',
        'message',
        'product_type',
        'parent_model_id',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected static $testimonial;

    public static function createOrUpdateTestimonial($request, $id = null)
    {
        if (isset($id))
        {
            self::$testimonial = Testimonial::find($id);
        } else {
            self::$testimonial = new Testimonial();
        }

        self::$testimonial->product_type        = $request->product_type;
        self::$testimonial->parent_model_id     = $request->parent_model_id;
        self::$testimonial->user_name           = $request->user_name;
        self::$testimonial->user_designation    = $request->user_designation;
        self::$testimonial->message             = $request->message;
        self::$testimonial->user_image          = fileUpload($request->file('user_image'), 'additional-features/testimonial', isset($id) ? static::find($id)->user_image : '');
        self::$testimonial->status              = $request->status == 'on' ? 1 : 0;
        self::$testimonial->save();
    }

    public static function deleteTestimonial($id)
    {
        self::$testimonial = Testimonial::find($id);
        if (file_exists(self::$testimonial->user_image))
        {
            unlink(self::$testimonial->user_image);
        }
        self::$testimonial->delete();
    }

    public function motorBike()
    {
        return $this->belongsTo(MotorBike::class, 'parent_model_id');
    }

    public function partsProduct()
    {
        return $this->belongsTo(PartsProduct::class, 'parent_model_id');
    }
}
