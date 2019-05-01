<?php
    
    
    function displayProgressBar($subject, $percentage){
        echo"<row>
                <div class='float-left' style='width: 100px;'>$subject</div>
                <div class='py-1' style='width: 100%;'>
                    <div class='progress'>
                        <div class='progress-bar progress-bar-striped progress-bar-animated' role='progressbar' 
                        style='width: $percentage%;' aria-valuenow='$percentage' aria-valuemin='0' aria-valuemax='100'>$percentage%</div>
                    </div>
                </div>
            </row>";
    }

    
    function displayCard($imgUrl, $title, $desc, $demoUrl, $sourceUrl, $tags){
        echo "<div class='card'>
                            <img src='imgs/vm.PNG' class='card-img-top niceImg'>
                            <div class='card-body'>
                                <h5 class='card-title font-weight-bold'>Vending Machine</h5>
                                <p class='card-text'>This application allows a user to create, load, and 
                                    service (test functionality of) vending machines. The user is also 
                                    able to adjust prices of products and generate a sales report 
                                    showing the sales totals of each item.</p>
                                    
                            </div>
                            <div class='card-footer'>
                                <div class='pb-3'>
                                    <a type='button' class='btn btn-outline-secondary'>Demo</a>
                                    <a type='button' class='btn btn-outline-secondary'>Source</a>
                                </div>
                                <span class='w3-tag w3-gray opacity50'>C++</span>
                            </div>
                        </div>";
    }
    
    
?>