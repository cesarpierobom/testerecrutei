<?php
 
namespace App\Repositories;
 
use App\Models\Vehicle;
 
class VehicleRepository
{
    protected $vehicle;
    
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function create($attributes)
    {
        return $this->vehicle->create($attributes);
    }
    
    public function all()
    {
        return $this->vehicle->all();
    }
    
    public function find($id)
    {
        return $this->vehicle->find($id);
    }
    
    public function update($id, array $attributes)
    {
        return $this->vehicle->find($id)->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->vehicle->find($id)->delete();
    }
}