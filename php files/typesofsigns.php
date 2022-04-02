<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basics of sign language</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <style>
    .sidenav{
      font-size: 12px;
    }
    ul{
    margin:10px 10px;
}
.nav-li{
  margin-right:20px;
}
.classi{
    font-weight:bolder;
    color:white;
    text-decoration:none;
    padding:10px 25px;
    display: inline;
    /* float:right;
    box-sizing: border-box; */
    border-radius:25px;
}
.classi:hover{
    color:black;
    background-color:#F5F5DC;
}

.sidenav{
    height:233%;
    width: 160px;
    /* z-index: 1;
    top: 0;
    left: 0; */
    background-color:#F5F5DC;
    /* overflow-y:hidden;
    padding-top: 20px; */
    /* padding:15px 25px; */
    /* display:block;
    font-weight: bolder;
    font-size:15px; */
  }


.sidenav li{
    list-style-type:none;

}
.sidenav li a{
    font-size:20px;
    color:black;
    display: block;
    font-weight:bolder;
    padding:10px 10px;
}
  .sidenav a:hover{
    text-decoration: none;
  }

  .sidenav a:visited{
    text-decoration: none;
  }

  .sidenav a:link{
    text-decoration: none;
  }

  .sidenav a:active{
    text-decoration: none;
  }
  .sidenav li a:hover{
    color: white;
    background-color: darkslategray;
    border-radius:25px;
    font-weight:bolder;
    box-shadow: 0px 0px 10px #29465B;
  }

  footer {
    background-color: #555;
    color: white;
    padding: 15px;
    text-align: center;
    margin-top:600px;
  }
  footer img{
      padding:10px;
  }
  @media screen and (max-width: 767px) {
    .sidenav {
      height: auto;
      width: 100%;
      position: relative;
      display: inline-block;
      padding: 15px 100px;
      margin-right:100px;
    }
    .sidebar a {float: left;
    margin-left:-10px;
    margin-top:-35px;
  }
    .row.content {height:auto;} 

     .sidebar ul{
    padding: 0;
    display: inline-flex;
    margin-top: 80px;

  }
  }
  @media screen and (max-width: 400px) {
.sidebar a {
  text-align: center;
  float: none;
}
}

  /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
  .row.content {height: 450px;}
    
  .sidebar ul{
    padding: 0;
  }
@media screen and (max-width:990px){
    .classi{
        float: left;
    }

}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.html"><img src="../images/logo.jpg" width=10% height=10%;></a>
          <!-- <p class="name">Speak with Sign</p> -->
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-li">
                <a class="classi" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-li">
                <a class="classi" href="keywords.php">Keywords</a>
              </li>
              <li class="nav-li">
                <a class="classi" href="dictionary.php">Dictionary</a>
              </li>
              <li class="nav-item dropdown">
                          <a href="alphanum.php" class="classi dropdown-toggle" data-bs-toggle="dropdown">Explore</a>
                          <div class="dropdown-menu dropdown-menu-end">
                              <a href="alphanum.php" class="dropdown-item">Alphabets and numbers</a>
                              <a href="typesofsigns.php" class="dropdown-item">Types of Signs</a>
                              <a href="basichandshapes.php" class="dropdown-item">Basic Handshapes</a>
                              <a href="grammarexplanation.php" class="dropdown-item">Grammar Explanantion</a>

              </li>
            </ul>
          </div>
        </div>
</nav>
<div class="sidebar">
  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-2 sidenav text-center">
        <ul>
           <p><li class="typesofsigns" ><a href="#type1">One Handed</a></li></p>
           <p><li class="typesofsigns"><a href="#type2">Two Handed<p>(symm)</p></a></li></p>
           <p><li class="typesofsigns"><a href="#type3">Two Handed<p>(asymm)</p></a></li></p>
        </ul>
        </div>
    <div class="col-sm-8 text-left">
      <!-- <p id="typesofsigns"></p>
      <p id="type1">
        <img src="../images/onehandedimage.gif" width="20%" height="20%">
        <b>ONE-HANDED SIGN</b>-Uses only your dominant hand</p>
      <p id="type2">
        <img src="../images/twohandedsymmimage.gif" width="20%" height="20%">
        <b>TWO-HANDED SYMMETRICAL SIGN</b>-Uses both your dominant and non-dominant hand where they both move the same way</p>
      <p id="type3">
         <img src="../images/twohandednonsymm.gif" width="20%" height="20%">
        <b>TWO-HANDED NON-SYMMETRICAL SIGN</b>-Uses both your dominant and non-dominant hand where the dominant hand moves while the non-dominant hand remains stationary</p> -->
      <div id="typesofsign">
        <div id="type1" style="display:flex; margin-top:50px;">
          <div style="flex:50%;margin-left:100px"> <img src="../images/onehandedimage.gif" width="80%" height="70%"></div>
          <div style="flex:50%;margin-top:100px;"><b>ONE-HANDED SIGN</b>-Uses only your dominant hand</div>
        </div>
        <div id="type2" style="display:flex;">
          <div style="flex:50%;margin-left:100px"> <img src="../images/twohandedsymmimage.gif" width="80%" height="70%"></div>
          <div style="flex:50%;"><b>TWO-HANDED SYMMETRICAL SIGN</b>-Uses both your dominant and non-dominant hand where they both move the same way</div>
        </div>
        <div id="type3" style="display:flex;">
          <div style="flex:50%;margin-left:100px"> <img src="../images/twohandednonsymm.gif" width="80%" height="70%"></div>
          <div style="flex:50%;"> <b>TWO-HANDED NON-SYMMETRICAL SIGN</b>-Uses both your dominant and non-dominant hand where the dominant hand moves while the non-dominant hand remains stationary</div>
        </div>
        
      </div>
      
      
        <hr>
    </div>
    </div>
  </div>
</div>
<footer>
<p>&copy Vanshi(7744)</p>
  <img src="../images/facebook.png" width="5%" height="5%">
  <img src="../images/twitter.png" width="5%" height="5%">
  <img src="../images/instagram.png" width="5%" height="5%">
</footer>
</body>
</html>