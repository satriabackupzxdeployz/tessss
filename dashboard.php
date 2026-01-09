<?php
include "config.php";
if(!isset($_SESSION['user'])) header("Location:index.php");

$user=$_SESSION['user'];
$data=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE username='$user'"));
?>

<h2>WELCOME <?= $user ?> (<?= $data['role'] ?>)</h2>
Saldo: Rp <?= $data['saldo'] ?>

<form method="post" action="process.php">
<input name="nominal" placeholder="Nominal">
<select name="metode">
<option>DANA</option>
<option>OVO</option>
<option>GOPAY</option>
<option>QRIS</option>
<option>BANK</option>
</select>
<button name="pay">PAY</button>
</form>

<h3>RIWAYAT</h3>
<?php
$q=mysqli_query($conn,"SELECT * FROM transaksi WHERE username='$user'");
while($r=mysqli_fetch_assoc($q)){
    echo "Rp {$r['nominal']} - {$r['metode']} - {$r['tanggal']}<br>";
}
?>
<br>
<a href="logout.php">LOGOUT</a>