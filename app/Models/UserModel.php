<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class UserModel extends Model
    {
        protected $table = 'user';
        //Uncommen below if you wand add primary key
        protected $primaryKey = 'id';
        protected $allowedFields =['nama','username','password','jenis','jenis_kelamin'];
    }
?>