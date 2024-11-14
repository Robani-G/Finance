<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
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
        'Company_Id',
        'Added_By',
        'Updated_By',
        'Approved_By',
        'Description',
        'file_path',
        'Status',

    ];

    public function User(){
        return $this->belongsTo(User::class,"Approved_By");
    }
    public function Company()
    {
        return $this->belongsTo(Company::class, 'Company_Id');
    }
}
