<?php 

namespace App\Models\reglas;

class Rules{
    public function is_valid_profesor(int $id):bool
    {
       
        $model = new ProfesorModel();
        $profesor = $model->find($id);

       return $profesor == null ? false : true;
    
    }

}