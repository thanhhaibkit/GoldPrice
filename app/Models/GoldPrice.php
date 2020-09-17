<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoldPrice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gold_price';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = null;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'data'
    ];
}
