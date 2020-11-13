<?php

namespace App\Models\User;

use App\Models\Company\Department;
use App\Models\Schedule\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;
use Roynex\InitialProjectPackage\Helpers\OperationalResult;
use Roynex\InitialProjectPackage\Traits\ModelTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable ,SoftDeletes ,ModelTrait ,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'pic', 'cover' ,'birthDay' ,'bio' ,'department_id' ,'role_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token','updated_at','deleted_at'];

    protected $dates = ['birthDay'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'department_id' => 'integer',
        'role_id' => 'integer',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function login($data) : OperationalResult
    {
        $operationalResult = new OperationalResult();
        $operationalResult->statues = 403;
        $operationalResult->isSuccess = false;
        if(Auth::attempt(['email' => $data['email'] , 'password' => $data['password']]))
        {
            $user = Auth::user();
            $user['access_token'] = $user->createToken('Emplex')->accessToken;
            $operationalResult->data = Auth::user();
            $operationalResult->isSuccess = true;
        }
        return $operationalResult;
    }
}
