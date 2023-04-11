<?php include 'template/header.php'; ?>
<?php include 'template/sidebar.php'; ?>

<?php
$page = $_GET['page'];
if (!empty($page)) {
    if ($_SESSION['level'] == 'admin') {
        switch ($page) {
            case 'home':
                include "home.php";
                break;

            case 'karyawan':
                include "admin/karyawan/index.php";
                break;

            default:
                echo "Coming Soon";
                break;
        }
    } else if ($_SESSION['level'] == 'operator') {
        switch ($page) {
            case 'home':
                include "home.php";
                break;

            default:
                echo "Coming Soon";
                break;
        }
    } else {
        switch ($page) {
            case 'home':
                include "home.php";
                break;

            default:
                echo "Coming Soon";
                break;
        }
    }
} else {
    include "home.php";
}
?>

<?php include 'template/footer.php'; ?>