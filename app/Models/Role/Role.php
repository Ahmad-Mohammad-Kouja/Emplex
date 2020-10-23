<?php



namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Role extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'roles';

    protected $fillable = ['name'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    public function responsibilitiesRoles()
    {
        return $this->hasMany(ResponsibilityRole::class);
    }
}
