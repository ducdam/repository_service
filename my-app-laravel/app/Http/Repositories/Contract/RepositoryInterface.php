<?php


namespace App\Http\Repositories\Contract;


interface RepositoryInterface
{
    public function getAll();
    public function save($obj);
    public function find($id);
    public function destroy($id);
}
