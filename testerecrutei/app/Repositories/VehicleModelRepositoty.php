<?php
 
namespace App\Repositories;
 
use App\Models\VehicleModel;
 
class VehicleModelRepository
{
    protected $vehicleModel;
    
    public function __construct(VehicleModel $vehicleModel)
    {
        $this->vehicleModel = $vehicleModel;
    }

    public function create($attributes)
    {
        return $this->vehicleModel->create($attributes);
    }
    
    public function all()
    {
        return $this->vehicleModel->all();
    }
    
    public function find($id)
    {
        return $this->vehicleModel->find($id);
    }
    
    public function update($id, array $attributes)
    {
        return $this->vehicleModel->find($id)->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->vehicleModel->find($id)->delete();
    }
}