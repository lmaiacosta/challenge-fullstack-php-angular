<?php

namespace Api\Models;

final class Contact extends BaseModel
{
    protected $primaryKey = 'userId';
    protected $table = 'user';

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
}
