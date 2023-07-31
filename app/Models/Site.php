<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Site
 * @package App\Models
 * @version January 27, 2021, 7:08 am UTC
 *
 * @property integer user_id
 * @property integer theme_id
 * @property string name
 * @property string email
 * @property string phone
 * @property string code
 * @property string config
 * @property string slug
 * @property string description
 * @property integer status
 */
class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'theme_id',
        'name',
        'email',
        'phone',
        'code',
        'config',
        'slug',
        'description',
        'status'
    ];
}
