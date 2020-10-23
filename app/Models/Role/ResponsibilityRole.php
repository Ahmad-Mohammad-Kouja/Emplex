<?php



namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class ResponsibilityRole extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'responsibilities_roles';

    protected $fillable = ['role_id' ,'responsibility_id'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $casts = [
        'responsibility_id' => 'integer',
        'role_id' => 'integer',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function responsibility()
    {
        return $this->belongsTo(Responsibility::class);
    }

}
