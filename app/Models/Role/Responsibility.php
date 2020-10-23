<?php



namespace App\Models\Role;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Responsibility extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'responsibilities';

    protected $fillable = ['name'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    public function responsibilitiesRoles()
    {
        return $this->hasMany(ResponsibilityRole::class);
    }

}
