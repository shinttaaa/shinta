<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class PesanModel extends Model
    {
        protected $table = 'pesan';
        //Uncommen below if you wand add primary key
        protected $primaryKey = 'id';
        protected $allowedFields =['tanggal','nama','total_harga','no_meja','status'];
    }
?>