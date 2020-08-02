<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    protected $fillable = ['nombre', 'email', 'telefono'];

    protected $primaryKey = 'id';

    protected $hidden = ['created_at', 'updated_at'];
}
