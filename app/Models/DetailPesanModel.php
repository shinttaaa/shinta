<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class DetailPesanModel extends Model
    {
        protected $table = 'DetailPesan';
        //Uncommen below if you wand add primary key
        protected $primaryKey = 'id';
        protected $allowedFields =['id_pesan','id_menu','jumlah','harga'];
    }
?>