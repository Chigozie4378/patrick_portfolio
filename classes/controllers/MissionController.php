<?php 
class MissionController extends Controller{
    public function index()
    {
        return $this->fetchAll('mission');
    }
}