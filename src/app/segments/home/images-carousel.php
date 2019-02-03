<?php

$new_product_desc = <<<EOD
<ul class="text-white">
    <li>RAK2248</li>
    <li>DIY Gateway</li>
    <li>Pilot Gateway Pro</li>
    <li>RAK2245</li>
    <li>RAK2243</li>
</ul>
EOD;

$pilot_gateway_desc = <<<EOD
<ul class="text-white">
    <li>Raspberry Pi 3B+</li>
    <li>LoRaWAN 1.0.2</li>
    <li>Android & iOS app</li>
    <li>Connect to IoT in a Box&trade;</li>
    <li>Alert, user management, maps and GPS</li>
    <li>Custom integration services, etc.</li>
</ul>
EOD;

$lorawan_gateway_desc = <<<EOD
<ul class="text-white">
    <li>Based on Semtech's SX1301</li>
    <li>Frequency: 443MHz/868MHz/915MHz</li>
    <li>8 uplink channels for Makers</li>
    <li>1 downlink channel for Makers</li>
</ul>
EOD;

$wistrio_tracker_module_desc = <<<EOD
<ul class="text-white">
    <li>Available with complete source code</li>
    <li>Built-in BME680 environmental sensors and accelerometer</li>
    <li>Options for IPEX & SMA antenna interfaces</li>
    <li>Power consumption lower to 16µA in Sleep Mode</li>
    <li>More interface extentions like I2C, GPIOs, UART, ADC, etc.</li>
</ul>

<span style="background-color: #000000; color: #ffffff;" class="btn btn-xs btn-pill mb-2">beta closed</span>
EOD;

$wislink_cellular_desc = <<<EOD
<ul class="text-white">
    <li>4G/LTE Cat-M1 (eMTC)</li>
    <li>4G/LTE Cat-NB1 (NB-IoT)</li>
    <li>2G/EGPRS</li>
</ul>
EOD;

$data->carousel = [
    'New Products' => [
        'tag_line' => 'Now Available',
        'description' => $new_product_desc,
        'images' => [
            '/assets/img/rakwireless/rak2248.png',
            '/assets/img/rakwireless/DIY_gateway.png',
            '/assets/img/rakwireless/pilot_gateway_pro.png',
            '/assets/img/rakwireless/RAK2245.png',
            '/assets/img/rakwireless/RAK2243.png',
        ],
        'slide_class' => 'gradient-half-semi-violet'
    ],
    'Pilot Gateway' => [
        'tag_line' => 'RAK, LoRa, IoT in a Box',
        'description' => $pilot_gateway_desc,
        'images' => [
            '/assets/img/rakwireless/pilot_gw.png',
            '/assets/img/rakwireless/02.png',
            '/assets/img/rakwireless/03.png'
        ],
        'store_link' => 'https://store.rakwireless.com/products/iot-in-a-box-powered-pilot-gate-way-with-semtech-sx1301',
        'slide_class' => 'gradient-half-semi-red'
    ],
    'LoRaWAN Gateway' => [
        'tag_line' => 'Revolutionary IoT Access Technology<br>LoRa Gateway Module',
        'description' => $lorawan_gateway_desc,
        'images' => [
            '/assets/img/rakwireless/01_small.png',
            '/assets/img/rakwireless/04.png',
            '/assets/img/rakwireless/02 (1).png'
        ],
        'store_link' => 'https://store.rakwireless.com/products/lora-gateway-concentrator-module-kit-rak831-base-on-sx1301-433-470-868-915mhz-wireless-spread-spectrum-transmission',
        'slide_class' => 'gradient-half-semi-violet'
    ],
    'WisTrio Tracker Module' => [
        'tag_line' => 'Early Access Beta',
        'description' => $wistrio_tracker_module_desc,
        'images' => [
            '/assets/img/rakwireless/RAK5205-1_1217 (1).png',
            '/assets/img/rakwireless/RAK5205-1217.png',
            '/assets/img/rakwireless/RAK5205-2_1217.png'
        ],
        //'product_page' => 'https://...',
        'slide_class' => 'gradient-half-semi-green'
    ],
    'WisLink Cellular' => [
        'tag_line' => 'BG96 Arduino Shield',
        'description' => $wislink_cellular_desc,
        'images' => [
            '/assets/img/rakwireless/Cellular-F45-3.png',
            '/assets/img/rakwireless/Cellular-F.png',
            '/assets/img/rakwireless/Cellular-B.png',
            
        ],
        'store_link' => 'https://store.rakwireless.com/products/wislink-cellular-bg96-shield-simultaneously-supporting-3-cellular-standards-2g-egprs-4g-lte-cat-m1emtc-cat-nb1nb-iot',
        'slide_class' => 'gradient-half-semi-gray'

    ]
];
