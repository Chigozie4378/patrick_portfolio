<?php 
class ServicesController extends Controller{
    public function index()
    {
        return $this->fetchAll('services');
    }
}