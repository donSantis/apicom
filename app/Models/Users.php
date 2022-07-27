<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Users
 * @package App\Models
 * @version July 27, 2022, 4:45 am UTC
 *
 * @property \App\Models\Role $idRole
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $run
 * @property string $dv
 * @property string $name
 * @property string $lastname
 * @property string $password
 * @property string $email
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $phone
 * @property string $address
 * @property integer $id_role
 */
class Users extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id';

    public $fillable = [
        'run',
        'dv',
        'name',
        'lastname',
        'password',
        'email',
        'email_verified_at',
        'phone',
        'address',
        'id_role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'run' => 'integer',
        'dv' => 'string',
        'name' => 'string',
        'lastname' => 'string',
        'password' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'phone' => 'string',
        'address' => 'string',
        'id_role' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'run' => 'nullable|integer',
        'dv' => 'nullable|string|max:255',
        'name' => 'required|string|max:255',
        'lastname' => 'nullable|string|max:255',
        'password' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'email_verified_at' => 'nullable',
        'phone' => 'nullable|string|max:255',
        'address' => 'nullable|string|max:255',
        'id_role' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idRole()
    {
        return $this->belongsTo(\App\Models\Role::class, 'id_role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'id_user');
    }
}
