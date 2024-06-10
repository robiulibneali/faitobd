<?php

namespace App\Models\Frontend;

use App\Mail\ContactUs;
use App\Models\Backend\BikeManagement\BikeMotorType;
use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'contact_type',
        'name',
        'email',
        'mobile',
        'bike_motor_type_id',
        'message',
        'workshop_info',
        'workshop_outside_image',
        'workshop_inside_image',
        'workshop_selfie_image',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'contacts';

    public static function saveContact($request, $id = null)
    {
        Contact::updateOrCreate(['id' => $id], [
            'contact_type'              => $request->contact_type,
            'bike_motor_type_id'        => $request->bike_motor_type_id,
            'name'                      => $request->name,
            'email'                     => $request->email,
            'mobile'                    => $request->mobile,
            'message'                   => $request->message,
            'workshop_info'             => $request->workshop_info,
            'workshop_outside_image'    => fileUpload($request->file('workshop_outside_image'), 'contact/workshop-outside-image', isset($id) ? static::find($id)->workshop_outside_image : ''),
            'workshop_inside_image'     => fileUpload($request->file('workshop_inside_image'), 'contact/workshop-inside-image', isset($id) ? static::find($id)->workshop_inside_image : ''),
            'workshop_selfie_image'     => fileUpload($request->file('workshop_selfie_image'), 'contact/workshop-selfie-image', isset($id) ? static::find($id)->workshop_selfie_image : ''),
            'status'                    => 1
        ]);

        $data = [
            'name'      => $request->name,
            'email'     => $request->email,
            'message'   => $request->message,
        ];

//        Mail::to($request->email)->send(new ContactUs($data));
//        Mail::to('robiul.cam06071998@gmail.com')->send(new ContactUs($data));
    }
    public function bikeMotorType()
    {
        return $this->belongsTo(BikeMotorType::class);
    }
}
