<?php
        function displayProgressBar($skill) {
                echo '  <row>
                                <div class="float-left" style="width: 100px;">'$skill'</div>
                                <div class="py-1" style="width: 100%;">
                                        <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" 
                                                style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                </div>
                        </row>';
        }

?>