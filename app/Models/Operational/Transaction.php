<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    /* use HasFactory; */
   use softDeletes;

   // declare table
   public $table = 'transaction';

   //this field must type date yyyy-mm-dd hh:mm:ss
   protected $dates = [
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   //declare fillable
   protected $fillable = [
       'appointment_id',
       'fee_doctor',
       'fee_specialist',
       'fee_hospital',
       'sub_total',
       'vat',
       'total',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   // one to many
   public function appointment()

   {    //2 parameter (path model,field foreign key,field primary key form table hasMany/hasOne in TypeUser.php)
       return $this->BelongsTo('App\Models\MasterData\Appointment', 'appointment_id', 'id');
   }
}
