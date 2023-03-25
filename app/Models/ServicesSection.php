<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicesSection extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services_sections';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'sub_title'];

    
}
