<?php
 
namespace App\Repositories;
 
use App\Models\Brand;
 
class BrandRepository
{
    protected $brand;
    
    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function create($attributes)
    {
        return $this->brand->create($attributes);
    }
    
    public function all()
    {
        return $this->brand->all();
    }
    
    public function find($id)
    {
        return $this->brand->find($id);
    }
    
    public function update($id, array $attributes)
    {
        return $this->brand->find($id)->update($attributes);
    }
    
    public function delete($id)
    {
        return $this->brand->find($id)->delete();
    }
}