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
    
    
?>