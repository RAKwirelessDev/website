<?php

$rak_core_desc = <<<EOD
<p class="text-white">
RAK is an Apple HomeKit Adjunct Licensee,<br>
The WACHO is also a HomeKit WiFi Module based on Phytrex SDK.<br><br>

For more details, please <a class="text-white" href="/contact-us/">contact us</a>.
</p>
EOD;

$data->carousel = [
    'RAK Core' => [
        'tag_line' => 'WiFi Module for Apple HomeKit',
        'description' => $rak_core_desc,
        'images' => [
            '/assets/img/rakwireless/wacio-gp.png',
            '/assets/img/rakwireless/wacio-ur.png'
        ],
        'slide_class' => 'gradient-half-semi-green'
    ]
];
