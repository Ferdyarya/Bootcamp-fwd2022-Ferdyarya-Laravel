<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    /* use HasFactory; */
    use softDeletes;

    // declare table
    public $table = 'role_user';

    //this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    //declare fillable
    protected $fillable = [
        'role_id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

     // one to many
     public function Role()

     {    //2 parameter (path model,field foreign key,field primary key form table hasMany/hasOne in TypeUser.php)
         return $this->BelongsTo('App\Models\ManagementAccess\Role','role_id', 'id');
     }
      // one to many
      public function user()

      {    //2 parameter (path model,field foreign key,field primary key form table hasMany/hasOne in TypeUser.php)
          return $this->BelongsTo('App\Models\Operational\user', 'role_id','id');
      }
}
