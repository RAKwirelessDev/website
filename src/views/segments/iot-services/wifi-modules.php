<div class="overflow-hidden">
    <div class="container-fluid space-1">
        <h3 class="text-md-center mb-6""><strong>According to your development requirements, click below to view details</strong></h3>
        <ul class="text-md-center"style="list-style: none;">
            <?php

foreach ($data->modules as $module_name => $module_info) {
        echo'<li class="hvr-grow mr-8"style="display:inline-block;">';
                    echo'<a href="'.$module_info['href_link'].'"><img  src="'.$module_info['image_link'].'">';
                        echo'<p class="text-md-center">'.$module_name.'</p>';
                    echo'</a>';
                echo'</li>';
}
    ?>
            </ul>
        
    </div>
</div>

