<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
     /* use HasFactory; */
     use softDeletes;

     // declare table
     public $table = 'permission_role';
 
     //this field must type date yyyy-mm-dd hh:mm:ss
     protected $dates = [
         'created_at',
         'updated_at',
         'deleted_at',
     ];
 
     //declare fillable
     protected $fillable = [
         'permission_id',
         'role_id',
         'created_at',
         'updated_at',
         'deleted_at',
     ];

      // one to many
    public function Permission()

    {    //2 parameter (path model,field foreign key,field primary key form table hasMany/hasOne in TypeUser.php)
        return $this->BelongsTo('App\Models\ManagementAccess\Permission','permission_id', 'id');
    }

      // one to many
      public function Role()

      {    //2 parameter (path model,field foreign key,field primary key form table hasMany/hasOne in TypeUser.php)
          return $this->BelongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
      }
}
