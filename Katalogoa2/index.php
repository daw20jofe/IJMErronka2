
        <?php
require_once('klaseak/com.leartik.jon.produktuak.produktua.php');
require_once('klaseak/com.leartik.jon.produktuak.produktua_db.php');
use com\leartik\jon\produktuak\ProduktuaDB;



    if(isset($_GET['id'])) {
        $id = filter_input(INPUT_GET,"id", FILTER_VALIDATE_INT);
    if($id !== false) {
        $produktua = ProduktuaDB::selectProduktua($_GET['id']);
        if ($produktua != null) {
            include('produktua_erakutsi.php');
        } else {
            include('produktua_id_baliogabea.php');
        }
    } else {

    include('produktua_id_baliogabea.php');
    }
} else {
    $produktuak = ProduktuaDB::selectProduktuak();
    include('produktuak_erakutsi.php');
}
?>
