<?php



namespace App\Models\Schedule;

use App\Enums\VacationTypes;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Vacation extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'vacations';

    protected $fillable = ['name' ,'description' ,'vacation_type' ,'state' ,'user_id' ,'admin_id'];

    protected $hidden = ['updated_at' ,'created_at'];

    protected $enumCasts = [
      'vacation_type' => VacationTypes::class
    ];

    protected $casts = [
        'admin_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class,'admin_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
