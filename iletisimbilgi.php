<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  
  
   text-align: center;
}
</style>
</head>
<body>
  

<!--Navbar Kodları-->
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html" style="padding-left: 15px;">Ana Sayfa</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      <div style="width: 100%;" class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" style="padding-left: 15px;" href="ilgialanlarim.html">İlgi Alanlarım</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" style="padding-left: 15px;" href="ozgecmis.html">Özgeçmiş</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="padding-left: 15px;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Memleketim
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
                <a class="dropdown-item" href="memleketim.html">Genel Bakış</a>
                
                <a class="dropdown-item dropdown-toggle" href="#" id="miraslardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Miraslar
                </a>
                <div class="dropdown-menu" aria-labelledby="miraslardropdown">
                  <a class="dropdown-item" href="corumsaatkulesi.html">Çorum Kulesi</a>
                  <a class="dropdown-item" href="hattusakenti.html">Hattuşa Antik Kenti</a>
                  <a class="dropdown-item" href="koyunbabakoprusu.html">Koyun Baba Köprüsü</a>
                  <a class="dropdown-item" href="corummuzesi.html">Çorum Müzesi</a>
                </div>  
                
                <a class="dropdown-item" href="corumfk.html">Çorum Futbol Klubü</a>
                
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="padding-left: 15px;" href="iletisim.html">İletişim</a>
             </li>
            <div style="padding-left: 15px;">
            <li class="nav-item">
              <a style=" background-color:rgb(78, 76, 76); border-radius: 10px;" class="nav-link"  href="loginsayfa.php">Giriş Yap</a>
            </li>
            </div>
          
          
        
        </div>
    

</div>



<h2>Gönderilen Form Bilgileri:</h2>
    <p>İsim: <?php echo $_POST["isim"]; ?></p>
    <p>Soyisim: <?php echo $_POST["soyisim"]; ?></p>
    <p>Email: <?php echo $_POST["email"]; ?></p>
    
    <p>Konu: <?php echo $_POST["konu"]; ?></p>
    <p>İçerik: <?php echo$_POST["icerik"]; ?></p>
    <p>Mesaj Tipi:</p>
    <ul>
        <?php 
        if(isset($_POST["mesajtip"])) {
            foreach($_POST["mesajtip"] as $mesajtip) {
                echo "<li>" . $mesajtip . "</li>";
            }
        } else {
            echo "<li>Seçim yapılmadı</li>";
        }
        ?>
    </ul>

    <p>Site Bakış: <?php echo $_POST["sitebakis"]; ?></p>
    <p>Doğum Tarihi: <?php echo $_POST["dogumtarihi"]; ?></p>



<!-- Footer -->
<div class="footer" style="display:relative; bottom: 0px;  ">
        <footer style="width: 100%;" id="sticky-footer" class=" py-4 bg-dark text-white-50" >
          <div class="container text-center">
            <h4 style="color: rgb(255, 255, 255);">Berat Bahadur</h4><br>
            <a href="https://github.com/MeShowy">
              <img src="görseller\githubicon.jpg" alt="githubicon" width="40" height="40" >
            </a>
            
          </div>
        </footer>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    
</body>
</html>