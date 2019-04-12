<!doctype html>
<html lang="en">
    
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--Gets the css stylings from the main.css file-->
        <link rel="stylesheet" type="text/css" href="styles.css">

        <!--site logo to be displayed in the tab section-->
        <link rel="icon" type="image/png" href="imgs/cl.png" />

        <!-- css library w3.css -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- Icons font -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Tab Title-->
        <title>Christian Lara</title>
    </head>
    
    <body>

            <!--This is the interactive navbar-->
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                    <a class="navbar-brand">CL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link active" href="#div_about">About<span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#projects">Projects</a>
                            <a class="nav-item nav-link" href="#contact">Contact</a>
                        </div>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <a class="btn btn-outline-success my-2" href="files/Resume.pdf" target="_blank">Resume</a>
                    </form>
                </nav>
            </div>
                        
        
            <div id="div-jumbotron">
                <div class="conatiner text-center">
                    <div id="div_Desc">
                        
                        <!--Jumbotrone to keep user interested in website-->
                        <div class="jumbotron bg-transparent">
                            <h1>I'm Christian Lara</h1>
                            <p class="lead pb-5">I Design & Build Applications/Websites</p>
                        </div>
                        
                    </div>
                    
                    <div id="div_pic">
                        <img src="imgs/wk.png" class="img-fluid">
                    </div>
                </div>

            </div>

            <div id="div_about" class="secundarybg py-5">
                <div class="container text-center col-lg-4">
                    <article class="pb-3">
                        <h2>Hi</h2>
                        <p>I am seeking a software engineering position with a focus on 
                        application development. I want to improve my skills in a professional 
                        work environment while gaining vital work experience.</p>
                    </article>
                        
                    <article>
                        <h2>Skills</h2>
                        <?php
                            include 'functions.php';
                            displayProgressBar('C#',70);
                            displayProgressBar('Java',60);
                            displayProgressBar('JS',65);
                            displayProgressBar('MySql',60);
                            displayProgressBar('C++',50);
                            displayProgressBar('VB',50);
                            displayProgressBar('HTML',75);
                            displayProgressBar('CSS',70);
                            displayProgressBar('Botstrap',60);
                            displayProgressBar('PHP',45);
                            displayProgressBar('jQuery',40);
                        ?>
                    </article>
                </div>
            </div>
                        
                    
            <div id="projects">
                <div class="container text-center py-5">
                    <h2 class="pb-5">Featured Work</h2>
                        <div class="card-deck">
                        <div class="card">
                            <img src="imgs/vm.PNG" class="card-img-top niceImg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Vending Machine</h5>
                                <p class="card-text">This application allows a user to create, load, and 
                                    service (test functionality of) vending machines. The user is also 
                                    able to adjust prices of products and generate a sales report 
                                    showing the sales totals of each item.</p>
                                    
                            </div>
                            <div class="card-footer">
                                <div class="pb-3"><a class="niceLink" target="_blank" 
                                    href="https://tinyurl.com/y3mebccn">Download</a></div>
                                <span class="w3-tag w3-gray">C++</span>
                            </div>
                        </div>
                        <div class="card">
                            <img src="imgs/studb.PNG" class="card-img-top niceImg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Student Database</h5>
                                <p class="card-text">This application will get data from a database of 
                                    students and it will list all the students in a data grid, the user 
                                    can click on of the items an see all the information in that student.</p>
                            </div>
                            <div class="card-footer">
                                <div class="pb-3"><a class="niceLink"  target="_blank" 
                                    href="https://tinyurl.com/y2vgwzhd">Download</a></div>
                                <span class="w3-tag w3-gray">C#</span>
                                <span class="w3-tag w3-gray">MySQL</span>
                            </div>
                        </div>
                        <div class="card">
                            <img src="imgs/adbo.PNG" class="card-img-top niceImg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">Address Book</h5>
                                <p class="card-text">The program can view, add, update or delete records 
                                    from a address book stored in a database. It can also be used to search 
                                    the records by last name and first name. The user can also print the 
                                    records stored in the database.</p>
                            </div>
                            <div class="card-footer">
                                <div class="pb-3"><a class="niceLink" target="_blank" 
                                    href="https://tinyurl.com/y298x6pf">Download</a></div>
                                <span class="w3-tag w3-gray">C#</span>
                                <span class="w3-tag w3-gray">MySQL</span>
                            </div>
                        </div>
                        </div>

                </div>
            </div>

                    
            <div id="contact" class="div_lastPart secundarybg">
                <div class="container pt-5 text-center">
                    <h1 class="p_bigBlackText text-center pb-3">Let's Work Together</h1>

                    <div class="row centered">
                        <div class="col-lg-5 pb-5">
                            <div>
                                <a class="btn btn-primary" href="mailto:lcristian34@gmail.com">Email Me</a>  
                            </div>
                        </div>
                    </div>
                    <div>
                        <h5 class="pb-2">Or find me on</h5>
                    </div>
                    <div class="pb-5">
                        <a class="fa fa-github" target="_blank" 
                        style="font-size:48px;" href="https://github.com/lcristian34"></a>
                        <a class="fa fa-linkedin" target="_blank" 
                        style="font-size:48px;" href="https://www.linkedin.com/in/christian-lara-17020b102/"></a>
                    </div>
                </div>
            </div>
            
                    
            <footer class="footer text-center">
                    <div class="container pt-3">
                        <p>&copy; Christian Lara. All rights reserved</p>
                    </div>
            </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>