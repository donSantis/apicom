<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Product
 * @package App\Models
 * @version July 27, 2022, 4:46 am UTC
 *
 * @property \App\Models\Category $idCategory
 * @property \App\Models\Color $idColor
 * @property \App\Models\Size $idSize
 * @property \App\Models\User $idUser
 * @property integer $id_user
 * @property integer $id_category
 * @property integer $id_size
 * @property integer $id_color
 * @property string $sku
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property integer $stock
 * @property boolean $state
 * @property string $image
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'id';

    public $fillable = [
        'id_user',
        'id_category',
        'id_size',
        'id_color',
        'sku',
        'title',
        'description',
        'price',
        'stock',
        'state',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_user' => 'integer',
        'id_category' => 'integer',
        'id_size' => 'integer',
        'id_color' => 'integer',
        'sku' => 'string',
        'title' => 'string',
        'description' => 'string',
        'price' => 'integer',
        'stock' => 'integer',
        'state' => 'boolean',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_user' => 'nullable',
        'id_category' => 'nullable',
        'id_size' => 'nullable',
        'id_color' => 'nullable',
        'sku' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'price' => 'required|integer',
        'stock' => 'required|integer',
        'state' => 'required|boolean',
        'image' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCategory()
    {
        return $this->belongsTo(\App\Models\Category::class, 'id_category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idColor()
    {
        return $this->belongsTo(\App\Models\Color::class, 'id_color');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idSize()
    {
        return $this->belongsTo(\App\Models\Size::class, 'id_size');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idUser()
    {
        return $this->belongsTo(\App\Models\User::class, 'id_user');
    }
}
