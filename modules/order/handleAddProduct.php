<?php
if (isset($_POST["id"]) && isset($_POST["userId"]) && isset($_POST["quantity"])) {

      require_once("addProduct.php");
      $result = addProduct($_POST["id"], $_POST["userId"], $_POST["quantity"]);
      echo $result;
} else {
      $response = array("code" => "400", "message" => "Missing credentials");
      echo json_encode($response);
}
?>