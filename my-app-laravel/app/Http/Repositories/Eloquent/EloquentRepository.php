<?php


namespace App\Http\Repositories\Eloquent;


use App\Http\Repositories\Contract\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function save($obj)
    {
        $obj->save();
    }

    public function find($id)
    {
        return $this->model->findOrFail($id);
    }

    public function destroy($id)
    {
        return $this->model->findOrFail($id)->delete();
    }
}

