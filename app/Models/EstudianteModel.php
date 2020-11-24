<?php namespace App\Models;
use CodeIgniter\Model;

class EstudianteModel extends Model
{
   protected $table = 'estudiante';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $allowedFields = ['nombre', 'apellido', 'genero', 'carnet', 'dui'];
   protected $useTimetamps = true;
   protected $createdField = 'created_at';
   protected $updatedField = 'updated_at';

   protected $validationRules = [
       'nombre' => 'required|alpha_space|min_length[3]|max_length[75]',
       'apellido' => 'required|alpha_space|min_length[3]|max_length[75]',
       'genero' => 'required|alpha_space|min_length[1]|max_length[1]',
       'carnet' => 'required|alpha_space|min_length[9]|max_length[9]',
       'dui' => 'required|alpha_space|min_length[9]|max_length[9]',
   ];
   protected $validationMessages = [
   
];
protected $skipValidation = false;

}