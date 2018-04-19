<?php
namespace App\Repositories;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * Object related model
     */
    protected $model;

    /**
     * Find record by its primary
     * 
     * @param int $id
     * @return collection
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Create new record
     * 
     * @param array $attributes
     * @return true
     */
    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }
}
