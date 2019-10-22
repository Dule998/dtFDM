<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="qTNsmfkMnSshvZ1uZ02j5ur4hO4eWJZSLra7ukUq">

    <title>domacitekstovi.com</title>

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Navigacija</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <img src="/images/domacitekstovi.png" class="navbar-brand mx-auto" alt="domaci tekstovi logo"> 
                    <a class="navbar-brand" href="http://127.0.0.1:8000">
                        domacitekstovi.com                      
                    </a>
                </div>
                
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                                                    <li><a href="http://127.0.0.1:8000/login">Prijava</a></li>
                            <li><a href="http://127.0.0.1:8000/register">Registracija</a></li>
                                            </ul>
                </div>
            </div>
        </nav>

      

    </div>
    <div class="container">
    <div class="panel panel-default">
    <div class="panel-heading">
    <h4> Dodavanje pesama</h4>
    </div>
    <div class="panel-body">
    <form action="#" method="post">
    <div class="form-group">
    <label for="title">Naslov</label>
    <input type ="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
    <textarea id="summernote" name="summernote" class="form-control"></textarea>
    </div> 
    
    </form>
    </div>
    </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
    $('#summernote').summernote()
        
        {
            height:"300px",
            
        }
    )
    })

  
    </script>
    <footer class="page-footer font-small blue" style="position:fixed;bottom:0;text-align:center;background-color:rgb(0,0,0,0.1);width:100%;height:30px;padding:5px;font-family:Arial;">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="https://www.domacitekstovi.com"> domacitekstovi.com</a>
        </div>
    </div>
    
    </footer>
    </body>
    </html>
    