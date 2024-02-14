<?php 
class ServicesController extends Controller{
    public function index()
    {
        return $this->fetchAll('services');
    }
    public function show()
    {
        if (isset($_GET['service_id'])) {
            $service_id = $_GET['service_id'];
            return $this->fetchWhereAnd("services", "id = $service_id");
        }
    }
}
