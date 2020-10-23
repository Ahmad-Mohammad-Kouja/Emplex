<?php



namespace App\Models\Schedule;

use App\Enums\RequestStateTypes;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Rating extends BaseModel
{
    use HasFactory,SoftDeletes;


    protected $table = 'ratings';

    protected $fillable = ['rate' ,'date' ,'employee_id' ,'rater_id'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $dates = ['date'];

    protected $casts = [
        'rate' => 'integer',
        'employee_id' => 'integer',
        'rater_id' => 'integer',
    ];

    public function employee()
    {
        return $this->belongsTo(User::class,'employee_id','id');
    }

    public function rater()
    {
        return $this->belongsTo(User::class,'rater_id','id');
    }
}
