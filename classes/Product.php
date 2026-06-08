<?php
    require_once "Database.php";

    class Product extends Database
    {
        public function getAllProducts()
        {
            $sql = "SELECT id, product_name, price, quantity FROM products";

            if($result = $this->conn->query($sql))
            {
                return $result;
            }
            else
            {
                die('Error retrieving all products: '. $this->conn->error);
            }
        }

        public function getProduct($id)
        {

            $sql = "SELECT * FROM products WHERE id = $id";

            if ($result = $this->conn->query($sql))
            {
                return $result->fetch_assoc();

            }
            else
            {
                die('Error retrieving the product: ' .$this->conn->error);
            }
        }

        public function add($request)
        {
            $product_name = $request['product_name'];
            $price = $request['price'];
            $quantity = $request['quantity'];

            $sql = "INSERT INTO products (`product_name`, `price`, `quantity`)VALUES ('$product_name', '$price', '$quantity')";

            if ($this->conn->query($sql))
            {
                header('location: ../views/dashboard.php');
                exit;
            }
            else
            {
                die('Error creating the product: '. $this->conn->error);
            }

        }

        public function update($request)
        {

            $id = $request['id'];
            $product_name = $request['product_name'];
            $price = $request['price'];
            $quantity = $request['quantity'];

            $sql = "UPDATE `products`
                    SET `product_name` = '$product_name',
                        `price` = '$price',
                        `quantity` = '$quantity'
                    WHERE id = $id";

            if ($this->conn->query($sql))
            {
                header('location: ../views/dashboard.php');
                exit;
            }
            else
            {
                die('Error updating product: ' . $this->conn->error);
            }

        }

        public function delete($id)
        {
            $sql = "DELETE FROM products WHERE id = $id";

            if ($this->conn->query($sql))
            {
                header('location: ../views/dashboard.php');
                exit;
            }
            else
            {
                die('Error deleting product: ' . $this->conn->error);
            }

        }

        public function payment($request)
        {
            $id = $request['id'];
            $payment = $request['payment'];
            $buy_quantity = $request['buy_quantity'];

            $product = $this->getProduct($id);
            $total_price = $product['price'] * $buy_quantity;
            $new_quantity = $product['quantity'] - $buy_quantity;

            if ($payment < $total_price)
            {
                die('Insufficient funds.');
                
            }

            $sql = "UPDATE `products`
                    SET `quantity` = '$new_quantity'
                    WHERE id = $id";

            if ($this->conn->query($sql))
            {
                header('location: ../views/dashboard.php');
                exit;
            }
            else
            {
                die('Error payment: ' . $this->conn->error);
            }
        }

    }
?> 
