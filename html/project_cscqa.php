<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Dr XU">
    <meta name="keywords" content="Corpus Linguistics, Dr Xu Xiaoyu, CityU, Research, English Research, Professor">
    <meta name="author" content="Dr Xu Xiaoyu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Dr. Xu Xiaoyu Project: EMLC">
    <meta property="og:image" content="images/logo.png">

    <title>Project: EMLC</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript", src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/project_master.css">
    <link rel="stylesheet" type="text/css" href="../css/project_cscqa.css">

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

    <!--First-Container-->
    <div id="top_container" class="conatiner">
      <div class="container-sm scroll_child">
        <div class="row">
          <div class="col-sm-7 text-justify head_desc">
            <div class="head text-left">
              <h2>Computer Science Conference Q&A (CSCQ&A) Corpus</h2>
            </div>
            <div class="desc">
              <p>
                The Computer Science Conference Q&A (CSCQ&A) corpus is part of a project funded by the City University of Hong Kong
                and lead by Assistant Professor Xiaoyu Xu. It consists of 80 Computer Science confrence Q&A sessions given by presenters
                across different professional levels and different cultural backgroundss. The creation of CSCQ&A is based on the fact that
                conference Q&A sessions can turn out to be a challenging encounter fo academics a unpredictable comments or questions can
                leave the presenter underprepared. Speakers have to make situalltionally appropriate responses to defend their research,
                persuade the audience, and manage interpersonal relationships. This public corpus can be of interest to applied linguists
                who are interested in this topic.
              </p>
            </div>
          </div>
          <div class="col-sm-4 pic order-first order-sm-last">
            <img src="../images/corpus.png" alt="" >
          </div>
        </div>
      </div>

      <!--Download Box-->
      <div id="downloadbox" class="container-sm download scroll_child">
        <div class="down-heading">
            <h2>Download The Corpus</h2>
        </div>
        <div class="row">
          <div class="col-sm-4 down-filter">
            <p>1. File Type</p>
          </div>
          <div class="col-sm-6 dropdown">
            <button id="ft_btn"class="btn btn-1 btn-secondary btn-dd dropdown-toggle text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              File Type
            </button>
            <div id="file_type" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class='dropdown-item'>Plain Text</a>
              <a class='dropdown-item'>XML</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 down-filter">
            <p>2.Level of Profession </p>
          </div>
          <div class="col-sm-6 dropdown ">
            <button id="lp_btn"class="btn btn-2 btn-secondary btn-dd dropdown-toggle text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Level of Profession
            </button>
            <div id="level_of_profession" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item">Ph.D. Researcher</a>
              <a class="dropdown-item">Professor</a>
             </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 down-filter">
            <p>3. Speaker Background</p>
          </div>
          <div class="col-sm-6 dropdown ">
            <button id="sb_btn" class="btn btn-3 btn-secondary btn-dd dropdown-toggle text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Speaker Background
            </button>
            <div id="speaker_background" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" >Native English Speaker</a>
              <a class="dropdown-item" >Non-Native English Speaker</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 down-filter">
            <p>4. Holdings Excel File</p>
          </div>
          <div class="col-sm-6 dropdown ">
            <button id="hd_btn" class="btn btn-4 btn-secondary btn-dd dropdown-toggle text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Holdings
            </button>
            <div id="holdings" class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item">Yes</a>
              <a class="dropdown-item">No</a>
            </div>
          </div>
        </div>
        <div class="d-flex flex-row-reverse">
          <button id="downloadbtn" class="btn btn-primary btn-download" >Download</button>
        </div>
      </div>

      <!--Team Box-->
      <div id="teambox" class="team scroll_child">
        <div class="container-sm ">
          <div class="heading">
            <h2>Team</h2>
            <div class="heading-underline "></div>
            <h5>Transcribers</h5>
          </div>
          <div class="row">
            <div class="col-6 col-md-3 member text-center">
              <img src="../images/KOManYi_sq.jpg" alt="">
              <p>KO Man Yi</p>
            </div>
            <div class="col-6 col-md-3 member text-center">
              <img src="../images/YUENWingTse_sq.jpg" alt="">
              <p>YUEN Wing Tse</p>
            </div>
            <div class="col-6 col-md-3 member text-center">
              <img src="../images/SEAHXinRu_sq.jpeg" alt="">
              <p>SEAH Xin Ru</p>
            </div>
          </div>
          <div class="heading heading-2">
            <h5>Web Developers</h5>
          </div>
          <div class="row">
            <div class="col-6 col-md-3 member text-center">
              <img src="../images/DEAnkolika.jpeg" alt="">
              <p>DE Ankolika</p>
            </div>
            <div class="col-6 col-md-3 member text-center">
              <img src="../images/NAUTIYALRishabh_sq.jpg" alt="">
              <p>NAUTIYAL Rishabh</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
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

      //Function to floatup the Download Box on scroll
      var pos=2*$('#top_container').position().top;
      $(window).scroll(function(event){
        var scroll = $(window).scrollTop();
        if(scroll>pos){
          $('#downloadbox').css('animation', 'float_up 2s forwards');
          $('#downloadbox').css('display', 'block');
        }
      })
      //Function to slide in the team member details on scroll
      var pos2=1.1*$('#downloadbox').position().top;
      $(window).scroll(function(event){
        var scroll2 = $(window).scrollTop();
        if(scroll2>pos2){
          $('#teambox').css('animation', 'fadein 1.5s ease-in');
        }
      })

      /* ------- Download Button related Functions---------*/

      selection =["","","",""]; //Flags to see if value from each field has been selected or not.
      flags=[0,0,0,0] //Flags to see if value from each field has been selected or not.

      //Function to get the selected value of fileType dropdown and put it in selection array
      $("#file_type a").on('click', function(){
        var selText=$(this).text();
        selection[0]=selText;
        flags[0]=1;
        document.querySelector("#ft_btn").innerHTML=selText;
      });
      //Function to get the selected value of professional level dropdown and put it in selection array
      $("#level_of_profession a").on('click', function(){
        var selText=$(this).text();
        selection[1]=selText;
        flags[1]=1;
        document.querySelector("#lp_btn").innerHTML=selText;
      });
      //Function to get the selected value of speakerBackground dropdown and put it in selection array
      $("#speaker_background a").on('click', function(){
        var selText=$(this).text();
        selection[2]=selText;
        flags[2]=1;
        document.querySelector("#sb_btn").innerHTML=selText;
      });
      //Function to get the selected value of Holdings file dropdown and put it in selection array
      $("#holdings a").on('click', function(){
        var selText=$(this).text();
        selection[3]=selText;
        flags[3]=1;
        document.querySelector("#hd_btn").innerHTML=selText;
      });
      //Function executed on download button click
      $("#downloadbtn").on('click', function(){
        for(i=0;i<=3;i++){
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
        xhr.open("POST", "server_cscqa.php");
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var message="fileType="+selection[0]+"&levelOfProfession="+selection[1]+"&speakerBackground="+selection[2]+"&holdings="+selection[3];
        xhr.send(message);
      });
    </script>
  </body>
</html>
