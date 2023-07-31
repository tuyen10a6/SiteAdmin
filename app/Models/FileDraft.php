<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FileDraft
 * @package App\Models
 * @version January 27, 2021, 7:08 am UTC
 *
 * @property string id
 * @property integer user_id
 * @property integer name
 * @property string path
 * @property string mime_type
 * @property string expired_at
 */
class FileDraft extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';
    
    protected $fillable = [
        'id',
        'user_id',
        'name',
        'path',
        'mime_type',
        'expired_at'
    ];
}
