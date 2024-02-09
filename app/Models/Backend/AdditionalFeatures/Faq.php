<?php

namespace App\Models\Backend\AdditionalFeatures;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['question', 'answer', 'status'];

    protected $searchableFields = ['*'];

    protected static $faq;

    public static function createOrUpdateFaq($request, $id = null)
    {
        if (isset($id))
        {
            self::$faq = Faq::find($id);
        } else {
            self::$faq = new Faq();
        }

        self::$faq->question  = $request->question;
        self::$faq->answer    = $request->answer;
        self::$faq->status    = $request->status == 'on' ? 1 : 0;
        self::$faq->save();
    }

    public static function deleteFaq($id)
    {
        self::$faq = Faq::find($id);
        self::$faq->delete();
    }
}
