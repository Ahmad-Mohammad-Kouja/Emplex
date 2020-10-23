<?php



namespace App\Models\Schedule;

use App\Enums\RequestStateTypes;
use App\Models\Role\Role;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Request extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'requests';

    protected $fillable = ['title' ,'description' ,'state' ,'response' ,'requester_id' ,'responder_id' ,'receivers_id'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $enumCasts = [
        'state' => RequestStateTypes::class
    ];

    protected $casts = [
        'requester_id' => 'integer',
        'responder_id' => 'integer',
        'receiver_id' => 'integer',
    ];


    public function requester()
    {
        return $this->belongsTo(User::class,'requester_id','id');
    }

    public function responder()
    {
        return $this->belongsTo(User::class,'responder_id','id');
    }

    public function receiver()
    {
        return $this->belongsTo(Role::class,'receivers_id','id');
    }

}
