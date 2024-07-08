<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'usuarios';
  protected $allowedFields = ['nombre', 'password', 'usuario', 'updated_at', 'created_at'];


}