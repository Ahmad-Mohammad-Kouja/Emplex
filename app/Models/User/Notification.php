<?php



namespace App\Models\User;

use App\Enums\NotificationTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Notification extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'notifications';

    protected $fillable = ['title' ,'description' ,'type' ,'type_id' ,'user_id' ,'notifier_id' ,'is_read'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $enumCasts = [
      'type' => NotificationTypes::class,
    ];

    protected $casts = [
        'user_id' => 'integer',
        'notifier_id' => 'integer',
    ];

}
