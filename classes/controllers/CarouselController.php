<?php 
class CarouselController extends Controller{
    public function index()
    {
        return $this->fetchAll('slider');
    }
}