<?php
interface IDao{
    public function add($obj);
    public function update($column_name, $id);
    public function delete($id);
    public function findAll();
    public function findById($id);
}