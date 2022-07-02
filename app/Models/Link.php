<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    /**
     *
     *
     * @var string
     * Primary key, is field 'short' */
    protected $primaryKey = 'short';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $guarded = false;
}
