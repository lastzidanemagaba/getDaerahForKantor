<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DaerahModel;

class Daerah extends ResourceController
{
    use ResponseTrait;
    
    public function index()
    {
        $model = new DaerahModel();
        $data = $model->findAll();
        $response=array(
            'status' => 1,
            'message' =>'Get List Successfully.',
            'data' => $data
        );
        return $this->respond($response, 200);
    }

    public function show($id = null)
    {
        $model = new DaerahModel();
        $data = $model->getWhere(['kode' => $id])->getResult();
        $response=array(
            'status' => 1,
            'message' =>'Get List Successfully.',
            'data' => $data
        );
        if($data){
            return $this->respond($response);
        }else{
            return $this->failNotFound('Tidak Ditemukan '.$id);
        }
    }

    

}