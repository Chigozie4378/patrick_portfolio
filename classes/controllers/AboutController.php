<?php
class AboutController extends Controller
{
    public function index()
    {
        return $this->fetchAll('about');
    }

}