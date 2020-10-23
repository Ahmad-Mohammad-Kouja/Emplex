<?php

namespace App\Models\User;

use App\Models\Company\Department;
use App\Models\Schedule\Schedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Roynex\InitialProjectPackage\Traits\ModelTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable,SoftDeletes,ModelTrait;

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
}
