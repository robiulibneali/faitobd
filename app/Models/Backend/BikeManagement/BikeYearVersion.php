<?php

namespace App\Models\Backend\BikeManagement;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BikeYearVersion extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'info', 'status'];

    protected $searchableFields = ['*'];

    protected $table = 'bike_year_versions';

    protected static $bikeYearVersions;

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::deleting(function ($bikeYearVersions){
            if (!empty($bikeYearVersions->motorBikes))
            {
                $bikeYearVersions->motorBikes->each->delete();
            }
        });
    }

    public static function saveOrUpdatebikeYearVersion($request, $id = null)
    {
        BikeYearVersion::updateOrCreate(['id' => $id], [
            'name'   => $request->name,
            'info'   => $request->info,
            'status' => $request->status == 'on' ? 1 : 0,
        ]);
    }


    public function motorBikes()
    {
        return $this->hasMany(MotorBike::class);
    }
}
