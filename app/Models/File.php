<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    protected $fillable=[
        'file_name',
        'file_path',
        'shared_with_user_id',
        'user_id'

    ];

    public function UserId(){
        return $this->belongsTo(User::class,"user_id");
    }
    public function SharedToUser()
    {
        return $this->belongsTo(User::class, 'shared_with_user_id');
    }
}
