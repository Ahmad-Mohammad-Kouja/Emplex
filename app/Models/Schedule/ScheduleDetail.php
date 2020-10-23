<?php



namespace App\Models\Schedule;

use App\Enums\ScheduleDetailTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class ScheduleDetail extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $table = 'schedule_details';

    protected $fillable = ['type', 'from', 'to', 'schedule_id'];

    protected $hidden = ['updated_at', 'created_at'];

    protected $enumCasts = [
        'type' => ScheduleDetailTypes::class
    ];

    protected $casts = [
        'schedule_id' => 'integer',
        'from' => 'time',
        'to' => 'time',
    ];

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

}
