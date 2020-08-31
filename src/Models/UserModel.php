<?php


namespace Project\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 */
class UserModel extends Model
{
    protected $table = 'users';
    public $timestamps = false;
    protected $guarded = [];

}