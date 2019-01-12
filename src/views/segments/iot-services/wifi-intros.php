<div class="overflow-hidden">
    <div class="container space-1">
            <?php
            $ctr=0;
foreach ($data->intros as $intro_name => $intro_info) {
        if($ctr%2 == 0){
            echo'<div class="row">';

            echo'<div class="slideInLeft col-md-5">';
                echo'<img class="ml-4"src="'.$intro_info['image_link'].'">';
            echo'</div>';

            echo'<div class="slideInRight col-md-7 mt-6">';
                echo'<h2>';
                echo '<strong>'.$intro_name.'</strong>';
                echo'</h2>';
                echo'<ul style="list-style:none;">';
                    foreach ($intro_info['description'] as $description) {
                        echo '<li style="width:50%;">';
                        echo '☼'.$description;
                        echo '</li>';  
                    }  
                echo'</ul>';
            echo'</div>';

            echo'</div>';
            echo'<br><br><br><br>';
            $ctr++;
        }
        else{
            echo'<div class="row">';

            echo'<div class="slideInRight col-md-7 mt-6 text-md-right" >';
            echo'<h2>';
            echo '<strong>'.$intro_name.'</strong>';
            echo'</h2>';
            echo'<ul class="text-md-left ml-8"style="list-style:none;">';
                foreach ($intro_info['description'] as $description) {
                    echo '<li style="width:75%;">';
                    echo '☼'.$description;
                    echo '</li>';  
                }  
            echo'</ul>';
            echo'</div>';

            echo'<div class="slideInLeft col-md-5">';
                echo'<img src="'.$intro_info['image_link'].'">';
            echo'</div>';

            

            echo'</div>';
            echo'<br><br><br><br>';
            $ctr++;
        }
        
}
    ?>
        
    </div>
</div>

