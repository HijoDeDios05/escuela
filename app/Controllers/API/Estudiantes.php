<?php namespace App\Controllers\API;

use App\Models\EstudianteModel;
use CodeIgniter\RESTful\ResourceController;
class Estudiantes extends ResourceController    
{
    public function __construct() {
        $this->model = $this.setModel(new EstudianteModel());
    }
	public function index()
	{
        $estudiantes = $this->model->findAll();
		return $this->respond($estudiantes);
	}
    public function create()
	{
        try {
            $estudiantes = $this->request->getJSON();
            if ($this->model->insert($estudiantes)):
                return $this->respondCreate();
            else:
                return $this->failValidationError($this->model->validation->listErrors());
            endif;
               
            
        } catch (\Exception $e) {
            return $this->failServerError('Ha ocurrido un error en el servidor');
        }
	}
	
}
