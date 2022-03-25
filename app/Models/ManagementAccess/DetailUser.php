<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    /* use HasFactory; */
    use softDeletes;

    // declare table
    public $table = 'detail_user';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // one to many
    public function type_user()

    {    //3 parameter (path model, field foreign key, field primary key form table hasMany/hasOne in TypeUser.php)
        return $this->BelongsTo('App\Models\MasterData\TypeUser', 'type_user_id', 'id');
    }

    // one to many
    public function user()

    {    //3 parameter (path model, field foreign key, field primary key form table hasMany/hasOne in TypeUser.php)
        return $this->BelongsTo('App\Models\User', 'user_id', 'id');
    }
}
