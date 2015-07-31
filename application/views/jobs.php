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
    <link rel="stylesheet" href="/res/css/a11ytheme.min.css" />
    <link rel="stylesheet" href="/res/css/landing.css" />

  </head>
  <body>
  
    <div class="visibility-layer" style="display:none"></div>

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


    <div class="jumbotron">
      <div class="container">
        <h2>Inc. Ability is a tool for job seekers who are blind or visually impaired.</h2>
        <p>Navigate the web just like they do.</p>
      </div>
    </div>


    <div id="content" class="container">

      <h2 class="center-text available-jobs-header">Available Jobs</h2>

      <div class="job-posting row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <div class="row center-text">
              <button type="button" class="btn btn-success btn-apply" data-target="#apply-success"  data-jobtitle="Accessibility Engineer">Apply</button>
              <h3>Job Title: Requirements Engineer</h3>
              <h4>Description: Defining, documenting and maintaining requirements and to the subfields of systems engineering and software engineering concerned with this process.</h4>
            </div>
        </div>
      </div>

      <div class="job-posting row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <div class="row center-text">
              <button type="button" class="btn btn-success btn-apply" data-target="#apply-success"  data-jobtitle="Software Engineer">Apply</button>
              <h3>Job Title: Software Engineer</h3>
              <h4>Description: Defining, documenting and maintaining requirements and to the subfields of systems engineering and software engineering concerned with this process.</h4>
            </div>
        </div>
      </div>

      <div class="job-posting row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <div class="row center-text">
              <button type="button" class="btn btn-success btn-apply" data-target="#apply-success"  data-jobtitle="Testing Engineer">Apply</button>
              <h3>Job Title: Testing Engineer</h3>
              <h4>Description: Defining, documenting and maintaining requirements and to the subfields of systems engineering and software engineering concerned with this process.</h4>
            </div>
        </div>
      </div>

      <div class="job-posting row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <div class="row center-text">
              <button type="button" class="btn btn-success btn-apply" data-toggle="modal" data-target="#apply-success" data-jobtitle="UX Designer">Apply</button>
              <h3>Job Title: UX Designer</h3>
              <h4>Description: Defining, documenting and maintaining requirements and to the subfields of systems engineering and software engineering concerned with this process.</h4>
            </div>
        </div>
      </div>
    </div>
      
    <div class="landing-footer center-text">
      <h4>#Mecate2015</h4>
    </div>
    

    <div id="apply-success" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header center-text">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
            <h4 class="modal-title" id="gridModalLabel">Congratulations!</h4>
            <h4>Your job title:</h4>
            <h4 id="modal-job-title"></h4>
            <h4>Now try to post a job on the employers tab without seeing the website, do not cheat!</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Ok!</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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

  </body>
  
  <script type="text/javascript" src="/res/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/res/js/bootstrap.min.js"></script>
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




