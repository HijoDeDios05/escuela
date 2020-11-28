<?php namespace App\Models;
use CodeIgniter\Model;

class EstudianteModel extends Model
{
   protected $table = 'grado';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $allowedFields    = ['grado', 'seccion', 'profesor'];
   protected $useTimetamps = true;
   protected $createdField = 'created_at';
   protected $updatedField = 'updated_at';

   protected $validationRules = [
    'grado'       => 'required|alpha_space|min_length[5]|max_length[60]',
    'seccion'     => 'required|alpha_space|min_length[1]|max_length[2]',
    'profesor_id' => 'required',
   ];
   protected $validationMessages = [
    'grado' => [
        'required' => 'No puede ir vacio',
        'alpha_space' => 'No se permiten numeros',
        'min_length' => 'El minimo de caracteres es 5',
        'max_length' => 'El maximo de caracteres es 60',
    ],

    'seccion' => [
        'required' => 'No puede ir vacio',
        'alpha_space' => 'No se permiten numeros',
        'min_length' => 'El minimo de caracteres es 1',
        'max_length' => 'El maximo de caracteres es 2',
    ],

    'profesor_id' => [
        'required' => 'No puede ir vacio',
    ],
];
protected $skipValidation = false;

}