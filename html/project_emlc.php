<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Dr XU">
    <meta name="keywords" content="Corpus Linguistics, Dr Xu Xiaoyu, CityU, Research, English Research, Professor">
    <meta name="author" content="Dr Xu Xiaoyu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Dr. Xu Xiaoyu Project: CSCQ&A">
    <meta property="og:image" content="images/logo.png">

    <title>Project: CSCQ&A</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript", src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/project_master.css">
    <link rel="stylesheet" type="text/css" href="../css/project_emlc.css">

  </head>
  <body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
      <a class="navbar-brand" href="index.html"><img class="logo" src="../images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Projects
             </a>
             <div class="dropdown-menu pull-right" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="project_cscqa.php">Project 1: CSCQ&A</a>
               <a class="dropdown-item" href="project_emlc.php">Project 2: EMLC</a>
             </div>
            </li>
          <li>
            <a class="nav-link" href="publications.html">Publications</a>
          </li>
        </ul>
      </div>
    </nav>

    <!--Front-Container-->
    <div id="top_container" class="conatiner">
      <div class="container-sm scroll_child">
        <div class="row">
          <div class="col-sm-7 text-justify head_desc">
            <div class="head text-left">
              <h2>Engineering MOOC Lecture Corpus (EMLC)</h2>
            </div>
            <div class="desc">
              <p>
                This project is situated in the global trend of online lectures, namely Massive Open Online Course (MOOC) lectures. This fast-spreading online genre of lecture is currently underinvestigated despite being problematised by practitioners. They particularly point out the lack of engagement between lecturers and students, perhaps caused by teachers' lack of awareness of the necessity to adapt their traditional lecturing techniques for the online context. Hence, this project aims to discover engaging strategies used in successful MOOCs by analysing 2 MOOCs collected from one highly rated and one low rated engineering course on Coursera.  The EMLC corpus is published below for other researchers who are interested in this data.
              </p>
            </div>
          </div>
          <div class="col-sm-4 pic order-first order-sm-last">
            <img src="../images/emlc.png" alt="" >
          </div>
        </div>
      </div>
      <div >
      </div>
      <div id="downloadbox" class="container-sm download scroll_child">
        <div class="down-heading">
            <h2>Download The Corpus</h2>
        </div>
        <div class="row">
          <div class="col-sm-4 down-filter">
            <p>1. High Rated Courses</p>
          </div>
          <div class="col-sm-6 dropdown dd-dropdown">
            <button id="ft_btn"class="btn btn-1 btn-secondary btn-dd dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              High Rated Courses
            </button>
            <div id="high_rated_courses" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class='dropdown-item'>Plain Text</a>
              <a class='dropdown-item'>XML</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 down-filter">
            <p>2. Low Rated Courses </p>
          </div>
          <div class="col-sm-6 dropdown dd-dropdown">
            <button id="lp_btn"class="btn btn-2 btn-secondary btn-dd dropdown-toggle text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Low Rated Courses
            </button>
            <div id="low_rated_courses" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class='dropdown-item'>Plain Text</a>
              <a class='dropdown-item'>XML</a>
             </div>
          </div>
        </div>
        <div class="d-flex flex-row-reverse">
          <button id="downloadbtn" class="btn btn-primary btn-download text-center" >Download<span class="glyphicon glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
        </div>
      </div>

      <!--Team Container-->
      <div id="teambox" class="team">
        <div class="container-sm ">
          <div class="heading">
            <h2>Team</h2>
            <div class="heading-underline "></div>
            <h5>Transcribers</h5>
          </div>
          <div class="row">
            <div id='mem1' class="col-6 col-md-3 member text-center">
              <img src="../images/CHIN_Hsin_Ming_new.jpeg" alt="">
              <p>CHIN Hsin Ming</p>
            </div>
            <div id='mem2' class="col-6 col-md-3 member text-center">
              <img src="../images/ZHANG Ao.jpg" alt="">
              <p>ZHANG Ao</p>
            </div>
            <div id='mem3' class="col-6 col-md-3 member text-center">
              <img src="../images/SEAHXinRu_sq.jpeg" alt="">
              <p>SEAH Xin Ru</p>
            </div>
          </div>
        </div>
      </div>

    <!--Footer-->
    </div>
    <div id="contact" class="offset">
      <footer>
        <div class="row ft justify-content-center text-center">
            <p> <strong>Dr. XU Xiaoyu | </strong>City University of Hong Kong </p>
        </div>
        <div class="infoTags">
            <div class="icons text-center">
              <a href="tel:+85234429877" target="_blank"><i class="fa fa-phone-square fa-2x footIncon"></i> </a>
              <a href="mailto:xiaoyuxu@cityu.edu.hk" target="_blank"><i class="fa fa-envelope fa-2x footIncon" aria-hidden="true"></i></a>
              <a href="https://goo.gl/maps/8ksYdiBngs2QwoRR9" id='loc'><i class="fa fa-map-marker fa-2x footIncon" aria-hidden="true"></i></a>
            </div>
          </div>
      </footer>
    </div>

    <!--Javascript-->
    <script type="text/javascript">

      //Function to floatup he Download Box on scroll
      var pos=1.6*$('#top_container').position().top;
      $(window).scroll(function(event){
        var scroll = $(window).scrollTop();
        if(scroll>pos){
          $('#downloadbox').css('animation', 'float_up 2s forwards');
        }
      })
      //Function to slide in team memebers on scroll
      var pos2=1.1*$('#downloadbox').position().top;
      $(window).scroll(function(event){
        var scroll2 = $(window).scrollTop();
        if(scroll2>pos2){
          $('#teambox').css('animation', 'fadein 1.5s ease-in');
        }
      })

      /* ------- Download Button related Functions---------*/

      selection =["",""]; //Flags to see if value from each field has been selected or not.
      flags=[0,0];//Flags to see if value from each field has been selected or not.

      //Function to get the selected value of high_rated_courses dropdown and put it in selection array
      $("#high_rated_courses a").on('click', function(){
        var selText=$(this).text();
        selection[0]=selText;
        flags[0]=1;
        document.querySelector("#ft_btn").innerHTML=selText;
      });

      //Function to get the selected value of low_rated_courses dropdown and put it in selection array
      $("#low_rated_courses a").on('click', function(){
        var selText=$(this).text();
        selection[1]=selText;
        flags[1]=1;
        document.querySelector("#lp_btn").innerHTML=selText;
      });

      //Function executed on download button click
      $("#downloadbtn").on('click', function(){
        for(i=0;i<=2;i++){
          if(flags[i]==0){
            window.alert("Please select values from all fields!");
            return false;
          }
        }

        //creating connection to php server file
        const xhr = new XMLHttpRequest();
        xhr.onload = function(){
          alert(this.responseText);
          window.location.href=this.responseText;
        };
        xhr.open("POST", "server_emlc.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var message="high_type="+selection[0]+"&low_type="+selection[1];
        xhr.send(message);
      });
    </script>
  </body>
</html>
