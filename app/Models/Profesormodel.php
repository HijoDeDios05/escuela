<?php namespace App\Models;
use CodeIgniter\Model;

class EstudianteModel extends Model
{
   protected $table = 'profesor';
   protected $primaryKey = 'id';
   protected $returnType = 'array';
   protected $allowedFields    = ['nombre', 'apellido', 'profesion', 'telefono', 'dui'];
   protected $useTimetamps = true;
   protected $createdField = 'created_at';
   protected $updatedField = 'updated_at';

   protected $validationRules = [
    'nombre'    => 'required|alpha_space|min_length[3]|max_length[75]',
        'apellido'  => 'required|alpha_space|min_length[3]|max_length[75]',
        'profesion' => 'required|alpha_space|min_length[2]|max_length[3]',
        'telefono'  => 'required|alpha_numeric_space|min_length[8]|max_length[9]',
        'dui'       => 'required|alpha_numeric_space|min_length[10]|max_length[10]',
   ];
   protected $validationMessages = [
    'nombre' => [
        'alpha_space' => 'No se permiten numeros',
        'required'    => 'Este campo no puede ir vacio',
        'min_length'    => 'El minimo de letras es 3',
        'max_length'    => 'El maximo de letras es 75',
    ],

    'apellido' => [
        'alpha_space' => 'No se permiten numeros',
        'required'    => 'Este campo no puede ir vacio',
        'min_length'    => 'El minimo de letras es 3',
        'max_length'    => 'El maximo de letras es 75',
    ],

    'dui' => [
        'alpha_numeric_space' => 'Solo se permiten numeros',
        'regex_match' => 'El formato es 00000000-0',
    ],

];
protected $skipValidation = false;

}