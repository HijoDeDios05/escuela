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
                $estudiantes->id = $this->model->insertID();
                return $this->respondCreate();
            else:
                return $this->failValidationError($this->model->validation->listErrors());
            endif;
               
            
        } catch (\Exception $e) {
            return $this->failServerError('Ha ocurrido un error en el servidor');
        }
    }
    public function edit($id = null)
	{
		try {
			if ($id==null):
				return $this->failValidationError('No se ha pasado un ID valido');
				$estudiante= $this->model->find($id);

				//validar que el ID no venga nulo
			if ($estudiante == null)
				return $this->failNotFound('No se ha encontrado un cliente con el id: '.$id);

				return $this->respond($estudiante);
			endif;
		} catch (\Exception $e) {
			return $this->failServerError('Ha ocurrido un error en el servidor');
		}	
	}

	public function update($id = null)
	{
		try {
			if ($id==null)
				return $this->failValidationError('No se ha pasado un ID valido');
				$estudianteVerificado= $this->model->find($id);

				//validar que el ID no venga nulo
			if ($estudianteVerificado == null)
				return $this->failNotFound('No se ha encontrado un cliente con el id: '.$id);

				$estudiante =$this-> request->getJSON();

			if ($this->model->update($id, $estudiante)):
				$estudiante-> id = $id;
				return $this->respondUpdated($estudiante);
			else:
				return $this->failServerError($this->model->validation->listErrors());
			endif;
		} catch (\Exception $e) {
			return $this->failServerError('Ha ocurrido un error en el servidor');
		}	
	}


	public function delete($id = null)
	{
		try {
			if ($id== null)
				return $this->failValidationError('No se ha pasado un ID valido');
				$estudianteVerificado= $this->model->find($id);

				//validar que el ID no venga nulo
			if ($estudianteVerificado == null)
				return $this->failNotFound('No se ha encontrado un cliente con el id: '.$id);


			if ($this->model->delete($id)):
				return $this->respondDeleted($estudianteVerificado);
			else:
				return $this->failServerError('No se ha podido eliminar el registro');
			endif;
		} catch (\Exception $e) {
			return $this->failServerError('Ha ocurrido un error en el servidor');
		}	
	}
	
}
