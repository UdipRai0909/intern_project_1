<?php
class crud
{
    // private database object
    private $db;

    // constructor to initialize private variable to the database connection
    function __construct($conn)
    {
        $this->db = $conn;
    }

    public function getPayments()
    {
        try {
            $sql = "SELECT * FROM payments";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function getOrders()
    {
        try {
            $sql = "SELECT * FROM orders";
            $result = $this->db->query($sql);
            return $result;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function insertPayment($name, $price, $time)
    {
        try {
            $sql = "INSERT INTO payments(name_paid, total_price, date_of_payment) VALUES(:name_paid, :total_price, :date_of_payment)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':name_paid', $name);
            $stmt->bindparam(':total_price', $price);
            $stmt->bindparam(':date_of_payment', $time);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function insertOrder($name, $price, $time)
    {
        try {
            $sql = "INSERT INTO orders(name_order, total_price, date_of_order) VALUES(:name_order, :total_price, :date_of_order)";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':name_order', $name);
            $stmt->bindparam(':total_price', $price);
            $stmt->bindparam(':date_of_order', $time);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function deletePayment($id)
    {
        try {
            $sql = "DELETE FROM payments WHERE payment_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function deleteOrder($id)
    {
        try {
            $sql = "DELETE FROM orders WHERE order_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            return false;
        }
    }

    public function deleteAll()
    {
        try {
            $sql1 = "TRUNCATE TABLE payments";
            $this->db->query($sql1);

            $sql2 = "TRUNCATE TABLE orders";
            $this->db->query($sql2);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
}