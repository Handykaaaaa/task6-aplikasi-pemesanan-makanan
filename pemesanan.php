<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai dari inputan form
    $menu = $_POST["menu"];
    $drink = $_POST["drink"];
    $quantityMenu = $_POST["quantity_menu"];
    $quantityDrink = $_POST["quantity_drink"];
    $name = $_POST["name"];
    // $email = $_POST["email"];
    $hargaSatuanMenu = 0;
    $hargaSatuanDrink = 0;
    $hargaTotal = 0;

    switch ($menu) {
        case 'burger':
            $hargaSatuanMenu = 50;
            break;
        case 'pizza':
            $hargaSatuanMenu = 100;
            break;
        case 'fries':
            $hargaSatuanMenu = 30;
            break;
        default:
            break;
    }

    switch ($drink) {
        case 'soda':
            $hargaSatuanDrink = 10;
            break;
        case 'milk':
            $hargaSatuanDrink = 15;
            break;
        case 'juice':
            $hargaSatuanDrink = 20;
            break;
        default:
            break;
    }

    $hargaTotalMenu = $hargaSatuanMenu * $quantityMenu;
    $hargaTotalDrink = $hargaSatuanDrink * $quantityDrink;
    $hargaTotal = $hargaTotalMenu + $hargaTotalDrink;

    // Tampilkan pesan konfirmasi
    echo "****************";
    echo "<br>";
    echo "CAFE KITA";
    echo "<br>";
    echo "****************";
    echo "<br>";
    echo "<h2>Detail Pesanan:</h2>";
    echo "Nama: " . $name. "<br>";
    echo "food: " . ucfirst($menu) . "<br>";
    echo "drink: " . ucfirst($drink) . "<br>";
    echo "quantity Makanan: " . $quantityMenu . "<br>";
    echo "quantity Minuman: " . $quantityDrink . "<br>";
    echo "--------------------------------------" . "<br>";
    echo "Harga Total: $hargaTotal";
    echo "<br>";
    echo "Terima kasih, $name! Pesanan Anda untuk $quantityMenu $menu dan $quantityDrink $drink akan segera diproses.";
}
?>