<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class UserAccount extends Model
{
  protected $table = 'useraccount';
  protected $primaryKey = 'id';
   protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'AccountType',

    ];

    use HasFactory;

}