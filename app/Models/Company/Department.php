<?php



namespace App\Models\Company;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Roynex\InitialProjectPackage\Bases\BaseModel;

class Department extends BaseModel
{
    use HasFactory,SoftDeletes;

    protected $table = 'departments';

    protected $fillable = ['name' ,'description' ,'logo' ,'company_id'];

    protected $hidden = ['updated_at' ,'deleted_at'];

    protected $casts = [
      'company_id' => 'integer',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

}
