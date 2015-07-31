<!DOCTYPE html>
<html>
  <head>
    <title>Inc. Ability, Accessible Jobs For The Visually Impaired</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="description" content="Incability is a tool for job seekers who are blind or visually impaired. Register and apply to jobs that you are interested in and receive a notification on our mobile application anytime an employeer is interested in your profile.">

    <link rel="stylesheet" href="/res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/res/css/bootstrap-accessibility.css" />
    <link rel="stylesheet" href="/res/css/a11ytheme.min.css" />
    <link rel="stylesheet" href="/res/css/landing.css" />

  </head>
  <body>

    <nav class="navbar navbar-default" role="navigation">
       <a class="sr-only" href="#content">Skip to content</a> 
       <div class="container-fluid">
          <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="sr-only">Toggle navigation</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/index.php/">Jobs</a></li>
                <li><a href="/index.php/employer">Employers</a></li>
                <li><a href="/index.php/about">About</a></li>
                <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources <b class="caret"></b></a>
                   <ul class="dropdown-menu">
                      <li><a href="http://www.w3.org/WAI/">Web Accessibility Initiative</a></li>
                      <li><a href="http://achecker.ca/checker/index.php">Web Acessibility Checker</a></li>
                      <li><a id="appdemo">App Demo</a></li>
                   </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li id="openeye"><a href="#"><img src="/res/img/open_eye.png" alt="non screen reader version" class="control-img"></a></li>
              <li id="closedeye"><a href="#"><img src="/res/img/closed_eye.png" alt="screen reader version" class="control-img"></a></li>
            </ul>
          </div>
       </div>
    </nav>


    <div class="visibility-layer"></div>

    <div class="jumbotron">
      <div class="container">
        <h2>Inc. Ability is a tool for job seekers who are blind or visually impaired.</h2>
        <p>Get notified on our mobile app when employeers want to meet you.</p>
      </div>
    </div>

    <div id="content" class="container">
      <h3 class="center-text available-jobs-header">Over a billion people, about 15% of the world's population, have some form of disability.</h3>
      <h3 class="center-text available-jobs-header">285 million people are estimated to be visually impaired worldwide: 39 million are blindand 246 have low vision.</h3>
      <h3 class="center-text available-jobs-header">About 90% of the world's visually impaired live in low-income/developing countries.</h3>
      <h3 class="center-text available-jobs-header">82% of people living with blindness are aged 50 and above – this age group represents20% of the world’s population.</h3>
      <h3 class="center-text available-jobs-header">An estimated 19 million children below 15 are visually impaired. 1.4 million areirreversibly blind for the rest of their lives and need visual rehabilitation interventions for a full psychological and personal development.</h3>
      <h3 class="center-text available-jobs-header"></h3>
    </div>
      
    <div id="appdemomodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="appModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="appModalLabel">App Demo Video</h4>
                </div>
                <div class="modal-body">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="http://www.youtube.com/embed/C0DPdy98e4c" frameborder="0" allowfullscreen=""></iframe>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close!</button>
                </div>
            </div>
        </div>
    </div>

    <div class="landing-footer center-text">
      <h4>#Mecate2015</h4>
    </div>

  </body>
  
  <script type="text/javascript" src="/res/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/res/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/res/js/bootstrap-accessibility.js"></script>
  <script type="text/javascript" src="/res/js/landing.js"></script>
  <script type="text/javascript">
    $('#appdemo').on("click", function()
    {
        var src = 'https://www.youtube.com/embed/WyAEwppH4RU?autoplay=1';
        $('#appdemomodal').modal('show');
        $('#appdemomodal iframe').attr('src', src);
    });

    $('#appdemo button').on("click",function () {
        $('#appdemo iframe').removeAttr('src');
    });

    $('#appdemo').on("keypress",function (e) {
      var key = e.which;
      if(key == 13)  // the enter key code
      {
        var src = 'https://www.youtube.com/embed/WyAEwppH4RU?autoplay=1';
        $('#appdemomodal').modal('show');
        $('#appdemomodal iframe').attr('src', src);
      }
    });  
  </script>
</html>




