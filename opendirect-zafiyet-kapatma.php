if( isset( $_GET['git-sayfa'] ) ) {
    $git = $_GET['git-sayfa'];
    if( $git == 'login' ) {
        header("Location:login.html"); 
    } else {
        echo "Gitmek istediğiniz sayfa bulunamadı !";
    }
}
