<?php



namespace App\Models\Schedule;

use App\Enums\AchievementAttachmentTypes;
use App\Enums\AchievementTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Achievement extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'achievements';

    protected $fillable = ['title' ,'description' ,'type' ,'attachment_type' ,'attachment' ,'schedule_detail_id'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $enumCasts = [
        'attachment_type' => AchievementAttachmentTypes::class,
        'type' => AchievementTypes::class,
    ];

    protected $casts = [
        'schedule_detail_id' => 'integer'
    ];


    public function scheduleDetail()
    {
        return $this->belongsTo(ScheduleDetail::class);
    }

}
