<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;
    const TABLE = 'roles';
    const _ID = 'id';
    const _NAME = 'name';
    const _DESCRIPTION = 'description';
    const _CREATED_AT = 'created_at';
    const _UPDATED_AT = 'updated_at';
    protected $fillable = [
        self::_ID,
        self::_NAME,
        self::_DESCRIPTION,
        self::_CREATED_AT,
        self::_UPDATED_AT
    ];

//    public function users()
//    {
//        return $this->belongsToMany(User::class, 'user_role');
//    }

}