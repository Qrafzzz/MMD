<!DOCTYPE html>
<html>
  <head>
    <link type="image/x-icon" rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Квартиры</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
	<!-- menu -->
<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img src="img/logo2.svg" alt="логотип" height="75%"/>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-fill w-100 fzb18">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Главная</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="doma.php">Дома</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="kvartiri.php">Квартиры</a>
                </li>
        </ul>
          <form class="form-inline my-2 my-lg-0 fzb18">
            <button class="btn btn-success" type="submit"><a href="php/registration/login.php"> Вход</a>
          </form>
        </div>
      </nav>
</div>
 <!-- /menu -->
<div class="push1"></div>
<div class="push10"></div>
	<!-- Квартиры -->
  <div > <h1 class="fzb25 text-center">РУМС1</h1></div>
	<div class="tabs">
    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1" title="Вкладка 1">Студия</label>
 
    <input id="tab2" type="radio" name="tabs">
    <label for="tab2" title="Вкладка 2">1-комнатная</label>
 
    <input id="tab3" type="radio" name="tabs">
    <label for="tab3" title="Вкладка 3">2-комнатная</label>
 
    <input id="tab4" type="radio" name="tabs">
    <label for="tab4" title="Вкладка 4">3-комнатная</label>
<?php
  include_once "php/connect.php";
  $home_id=$_GET['home_id'];
  $street=$_POST['street'];
  $location=$_POST['location'];
  $name_home=$_POST['name_home'];
  $description_home=$_POST['description_home'];
  $apartments=$_POST['apartments'];

  $number_home=$_POST['number_home'];
  $street_apartments=$_POST['street_apartments'];
  $name_apartments=$_POST['name_apartments'];
  $description_apartments=$_POST['description_apartments'];
  $price=$_POST['price'];

  $query_home = ("SELECT * FROM `home` WHERE `id` = '$home_id'");
  $run_out_home=mysqli_query($connection,$query_home);
  $idc=mysqli_fetch_array($run_out_home);

?>
  <div class="box">

<?php

  $query_apartments = ("SELECT * FROM `apartments` WHERE `number_home`='$idc[name_home]' AND `street_apartments`='$idc[street]'");
  $run_out_apartments=mysqli_query($connection,$query_apartments);


  while($ids=mysqli_fetch_array($run_out_apartments)){
  echo "
    <div class=about>
       <div class=container-fluid bg-main text-center white fz17 height=823px> 
       <div class=bg-main>
       <div class=text-center>
       <div class=white>
       <div class=fz17 style=height=823px>
        <div class=row> 
            <div class=col-md-9 style=overflow: hidden;>
            <div class=dw>
                <img class=img-fluid style=background-color: white; src=img/flats/$ids[photo]>
            </div></div>
          <div class=col-md-3>
          <div class=push30></div>
           <p class=fzb18>
              $ids[number_home]
              $ids[street_apartments]
              $ids[name_apartments]
              $ids[description_apartments]
              $ids[floor]
              $ids[rooms]
              $ids[price]</p><br>
          </div> </div></div></div></div>
        </div> 
     </div>
 </div>
  ";
  }

?> 
    <!-- <section id="content-tab1">
        <div class="about">
    <div class="container-fluid bg-main text-center white fz17" height="823px"> 
        <div class="row text-center"> 
           <div class="col-md-9" style="overflow: hidden;">
            <img src="img/flats/studia.png"  class="img-fluid" style="background-color: white;">
        </div>
           <div class="col-md-3">
               <h1 class="fzb18">Студия</h1>
               <div class="push30"></div>
            <p class="fzb18">ОТ 1400 Т.Р.</p>
            <div class="push50"></div>
            <form class="form-inline my-2 my-lg-0 fzb18 justify-content-center">
              <button class="btn btn-success" type="submit" style="width: 250px;">Оформить ипотеку</button>
            </form>
        </div> 
        </div> 
     </div>
 </div>
    </section>  
    <section id="content-tab2">
      <div class="about">
       <div class="container-fluid bg-main text-center white fz17" height="823px"> 
           <div class="row text-center"> 
              <div class="col-md-9" style="overflow: hidden;">
               <img src="img/flats/1.png" class="img-fluid" style="background-color: white;">
           </div>
              <div class="col-md-3">
                  <h1 class="fzb18">1-комнатная</h1>
                  <div class="push30"></div>
               <p class="fzb18">ОТ 1850 Т.Р.</p>
               <div class="push50"></div>
               <form class="form-inline my-2 my-lg-0 fzb18 justify-content-center" action="index.html#ipoteka">
                <button class="btn btn-success" type="submit" style="width: 250px;">Оформить ипотеку</button>
               </form>
           </div> 
           </div> 
        </div>
    </div>
    </section> 
    <section id="content-tab3">
      <div class="about">
       <div class="container-fluid bg-main text-center white fz17" height="823px"> 
           <div class="row text-center"> 
              <div class="col-md-9" style="overflow: hidden;">
               <img src="img/flats/2.png" class="img-fluid" style="background-color: white;">
           </div>
              <div class="col-md-3">
                  <h1 class="fzb18">2-комнатная</h1>
                  <div class="push30"></div>
               <p class="fzb18">ОТ 2660 Т.Р.</p>
               <div class="push50"></div>
               <form class="form-inline my-2 my-lg-0 fzb18 justify-content-center" action="index.html#ipoteka">
                <button class="btn btn-success" type="submit" style="width: 250px;">Оформить ипотеку</button>
               </form>
           </div> 
           </div> 
        </div>
    </div>
    </section> 
    <section id="content-tab4">
      <div class="about">
       <div class="container-fluid bg-main text-center white fz17" height="823px"> 
           <div class="row text-center"> 
              <div class="col-md-9" style="overflow: hidden;">
               <img src="img/flats/3.png" class="img-fluid" style="background-color: white;">
           </div>
              <div class="col-md-3">
                  <h1 class="fzb18">3-комнатная</h1>
                  <div class="push30"></div>
               <p class="fzb18">ОТ 3400 Т.Р.</p>
               <div class="push50"></div>
               <form class="form-inline my-2 my-lg-0 fzb18 justify-content-center" action="index.html#ipoteka">
                <button class="btn btn-success" type="submit" style="width: 250px;">Оформить ипотеку</button>
               </form>
           </div> 
           </div> 
        </div>
    </div>
    </section>     -->
</div>
<!--  -->
<div class="push10"></div>

		<!-- ФУТЕР -->
<div class="footer">
	<div class="name_company">«РУМС»</div>

  <div class="footer_name d-none d-lg-block d-xl-none">
		<div class="footer_link"><a href="index.php">Главная</a></div>
		<div class="footer_link"><a href="doma.php">Дома</a></div>
	</div>

	<div class="seti">
		<div class="footer_examples"><a href="https://vk.com/" target="_blank"><img src="img/link/vk.png" width="30px"></a></div>
		
		<div class="footer_examples"><a href="https://twitter.com/" target="_blank"><img src="img/link/twitter.png" width="30px"></a></div>

		<div class="footer_examples"><a href="https://www.instagram.com/" target="_blank"><img src="img/link/insta.png" width="30px"></a></div>
	</div>

	<div class="copyright">Copyright</div>
</div>

</body>
</html>