<?php
class HomeController extends Controller
{
    public function index()
    {
        return $this->fetchAll('introduction');
    }

    public function store()
    {
        if (isset($_POST["submit"])) {
            $body = Validate::valInput($_POST['body']);
            $fetch = $this->fetchAll('introduction');

            if (mysqli_num_rows($fetch) > 0){
                $this->updates(
                    "introduction",
                    U::col("body = $body"),
                    U::where("id = 1")
                );
            }else{
                $this->insert('introduction', $body);
            }
                
        }
    }

    public function show($data)
    {
        return $this->fetchWhereLikeOr("stocks", "productname = $data");
    }
    public function delete()
    {
        if (isset($_GET["product_id"])) {
            $product_id = $_GET["product_id"];
            $filepath = $_GET["filepath"];
            unlink($filepath);
            return $this->trashWhere("stocks", "product_id = $product_id");
        }
    }
    public function updateQty($quantity, $product_id)
    {

        $this->updates(
            "stocks",
            U::col("quantity = $quantity"),
            U::where("product_id = $product_id")
        );
    }
    public function updateRprice($rprice, $product_id)
    {

        $this->updates(
            "stocks",
            U::col("rprice = $rprice"),
            U::where("product_id = $product_id")
        );
    }
    public function updatewprice($wprice, $product_id)
    {

        $this->updates(
            "stocks",
            U::col("wprice = $wprice"),
            U::where("product_id = $product_id")
        );
    }
    public function updateName($new_name, $product_id)
    {

        $this->updates(
            "stocks",
            U::col("productname = $new_name"),
            U::where("product_id = $product_id")
        );
    }
    public function searchStock($search_stock)
    {

        return $this->fetchWhereLikeAnd("stocks", "productname = $search_stock");
    }
}
