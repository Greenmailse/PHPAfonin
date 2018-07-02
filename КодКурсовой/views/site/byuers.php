<?php include $_SERVER['DOCUMENT_ROOT'].'\views\layout\header.php'; // $_SERVER['DOCUMENT_ROOT']
$db = mysqli_connect ('localhost','root','','bdwatches'); ?>

<body>

<?php

echo '<h3>
  Ваши покупки,   '.$_SESSION['name'].'!
</h3>';

$db = mysqli_connect('localhost','root','','bdwatches');
require_once('cart.php');
require_once('cookie.php');

$cart = new Cart();
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

if ($action == 'add') {
    $id = (int)$_GET['id'];
    $cart->addProduct($id);
    header('Location: index.php');
} else {
    if ($cart->isEmpty()) {
        echo "Cart is empty";
    } else {
        $id_sql = $cart->getProducts(true);
        $sql = "SELECT * FROM product WHERE id IN ({$id_sql})";

        $books = $db->query($sql);

        echo "My cart: <br>";
        foreach ($books as $book) {
            echo "<b>{$book['title']}</b>  <br>";
        }
    }
  }
?>

<style>
h3{
  text-align: center;
}
</style>

</body>
