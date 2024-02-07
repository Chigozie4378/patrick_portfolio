<?php
class SliderController extends Controller
{
    public function index()
    {
        return $this->fetchAll('slider');
    }
}