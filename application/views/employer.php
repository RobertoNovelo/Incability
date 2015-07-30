<!DOCTYPE html>
<html>
  <head>
    <title>Inc. Ability, Accessible Jobs For The Visibility Impaired</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width, height=device-height" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="description" content="Incability is a tool for job seekers who are blind or visually impaired. Register and apply to jobs that you are interested in and receive a notification on our mobile application anytime an employeer is interested in your profile.">

    <link rel="stylesheet" href="/res/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/res/css/bootstrap-accessibility.css" />
    <link rel="stylesheet" href="/res/css/a11ytheme.min.css" />
    <link rel="stylesheet" href="/res/css/employer.css" />

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
        <h2>Incability is a tool for job seekers who are blind or visually impaired.</h2>
        <p>Get notified on our mobile app when employeers want to meet you.</p>
      </div>
    </div>

    <div id="content" class="container">
      <div class="visibility-layer"></div>

      <h3 class="center-text available-jobs-header">Please Enter Your Job Posting Details</h3>

      <div class="row job-posting">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <input id="job-title" class="form-control" placeholder="Job Title"/>
        </div>
      </div>

      <div class="row job-posting">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <input id="job-desc" class="form-control" placeholder="Job Description"/>
        </div>
      </div>

      <div class="row job-posting">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 center-text">
          <button type="button" class="btn btn-success btn-post-job">Post Job</button>
        </div>
      </div>
    </div>
      
    <div class="landing-footer center-text">
      <h4>#Mecate2015</h4>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="post-success" tabindex="-1" role="dialog" aria-labelledby="Success" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            <h4 class="modal-title" id="Success">Thank you!</h4>
          </div>
          <div class="modal-body center-text">
          <h4>Your job title:</h4>
          <h4 id="modal-post-title"></h4>
          <h4>Your job description:</h4>
          <h4 id="modal-post-desc"></h4>
          <h4>Please add your name to the list of people who have completed this challenge:</h4>
              <input class="form-control" placeholder="Name"/>
              <button type="button" id="submit-name" class="btn btn-success btn-post-job">Add My Name</button>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Nevermind, Close This!</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!-- Modal -->
    <div class="modal fade" id="post-fail" tabindex="-1" role="dialog" aria-labelledby="Failed" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
            <h4 class="modal-title" id="Failed">You are either missing the title or the description of your job!</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Alright!</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

  </body>
  
  <script type="text/javascript" src="/res/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="/res/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/res/js/bootstrap-accessibility.js"></script>
  <script type="text/javascript" src="/res/js/employer.js"></script>
</html>
    




