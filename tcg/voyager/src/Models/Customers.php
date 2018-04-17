<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\HasRelationships;
use TCG\Voyager\Traits\Translatable;

class Customers extends Model
{
    use Translatable,
        HasRelationships;


    protected $table = 'customers';

    protected $fillable = ['phone', 'email', 'content', 'name','source','medium','campaign','employer','status'];

    public function posts()
    {
        return $this->hasMany(Voyager::modelClass('Customers'))
            ->published()
            ->orderBy('created_at', 'DESC');
    }

    public function parentId()
    {
        return $this->belongsTo(self::class);
    }
}


