

<?php


$row_count = $r->rowCount();
                      
//  if (mysqli_num_rows($r) >= 1) {
if ($row_count >= 1) {
  echo '
  <dl class="special fright">
  <div>
    <dt>
      <a href="/sales.php">Sale Items</a>
    </dt>
  </div>';

    //  while ($row = mysqli_fetch_array($r,MYSQLI_ASSOC)) {
    while ($row = $r->fetch(PDO::FETCH_ASSOC)) {
      echo '
      <dd>
        <div class="sale_items_home">
          <a href="/sales.php/#' . $row['sku'] . '" title="View this
          Product">
            <img width="50" height="50" alt="" src="htdocs/products/' . $row['image'] . '" /></a>
            <span>'. "     only " . '<a href="/sales.php/#' . $row['sku'] . '" title="View this
            Product">' . $row['sale_price'] .  '</a>' . '</span>
          
        </div>
      </dd>';
    }

    echo '</dl>';
}   //  End of mysqli_num_rows() IF.