<?php

namespace App\Models;
use CodeIgniter\Model;

class MytestModal extends Model
{
    function db()
    {
        $result = $this->db->query('CREATE TABLE IF NOT EXISTS mytest(
            id int(11) not null auto_increment primary key,
            name varchar(100),
            age int(3)
        )');

        $result = $this->db->query('CREATE TABLE IF NOT EXISTS useractivity(
            id int(11) not null auto_increment primary key,
            email varchar(100),
            password varchar(400)
        )');

        if($result){
            return 'Table created successfully';
        }else{
            return 'Problem on craeteig new table';
        }
    }
}