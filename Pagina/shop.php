<?php include "top.php"; ?>

<?php 
  $mysqli = new mysqli("localhost", "root", "", "shop"); 
?>

<form action="shop.php" method="get">
  <table>
    <thead>
    <tr>
      <td><a href="shop.php">Productos</a></td> 
      <td><a href="shop.php">Precios</a></td>
      <td><a href="shop.php">Cantidad</a></td>
      <td>Añadir al carrito</td>
    </tr>
  </thead>  
  <tbody>
    <?php 
      $query = $mysqli -> query("SELECT * FROM products");
      while ($row = $query -> fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['amount'] . "</td>";
        echo
        echo "</tr>";
      }
    ?>

  </tbody>
  </table>
</form>

<?php include "bottom.php"; ?>