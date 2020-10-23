<?php



namespace App\Models\Company;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Company extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'companies';

    protected $fillable = ['name' ,'email' ,'address' ,'logo'];

    protected $hidden = ['updated_at','deleted_at'];

    public function departments()
    {
        return $this->hasMany(Company::class);
    }

}
