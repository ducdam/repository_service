<?php


namespace App\Http\Services;


interface ProductServiceInteface
{
   public function getAll();
   public function store($request);
   public function show($id);
   public function update($request,$id);
   public function delete($id);
}
