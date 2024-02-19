<?php 
class NavbarController extends Controller{
    public function navbarIndex()
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
