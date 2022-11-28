<?php
require_once 'database.php';

$res = $pdo->query('SELECT * FROM tshirt');
$tshirts = $res->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach ($tshirts as $tshirt) : ?>
    <option value="<?= $tshirt['id']; ?>"><?= $tshirt['size']; ?></option>
    <!-- <option value="<?= $tshirt['id']; ?>"><?= $tshirt['name']; ?></option> -->
    <!-- <option value="<?= $tshirt['id']; ?>"><?= $tshirt['color']; ?></option> -->
<?php endforeach; ?>