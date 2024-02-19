<?php
class CommitmentController extends Controller
{
    public function index()
    {
        return $this->fetchAll('commitment');
    }
    
    
}
