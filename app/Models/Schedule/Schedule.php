<?php



namespace App\Models\Schedule;

use App\Enums\ScheduleTypes;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Schedule extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'schedules';

    protected $fillable = ['date' ,'type' ,'type_id' ,'user_id'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $enumCasts = [
        'type' => ScheduleTypes::class,
    ];

    protected $casts = [
        'user_id' => 'integer',
        'type_id' => 'integer',
    ];

    public function scheduleDetails()
    {
        return $this->hasMany(ScheduleDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
