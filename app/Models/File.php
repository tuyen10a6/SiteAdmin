<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 * @package App\Models
 * @version January 27, 2021, 7:08 am UTC
 *
 * @property string id
 * @property integer user_id
 * @property integer name
 * @property string type
 * @property string path
 * @property string mime_type
 */
class File extends Model
{
    use HasFactory;

    const FILE_TYPE_IS_IMG = 1;

    public $incrementing = false;

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'type',
        'path',
        'mime_type'
    ];
}
