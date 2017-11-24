<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * iThe table associated with the model.
     *
     * @var string
     */
    protected $table = "categories";

    protected $primaryKey = "idcategories";

    /**
     * incates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    protected $fillable = ['label'];
}