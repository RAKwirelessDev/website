<?php

$diy_enterprise_gateway_desc = <<<EOD
<ul class="text-white">
    <li>Complete hardware package: LoRa Concentrator, Cellular, GPS, and WiFi.</li>
    <li>Supports Power over Ethernet (PoE) IEEE 802.2 AF/AT-Compliant Class 4, 48V.</li>
    <li>Backup battery up to 5 hours sustained operation.</li>
    <li>IP67 waterproof enclosure with cable gland.</li>
</ul>
EOD;

$pilot_gateway_pro_desc = <<<EOD
<ul class="text-white">
    <li>Includes: Raspberry Pi 3B+,<br>RAK2245 Pi HAT, <br>BG96 (Quectel) PiHat</li>
    <li>Cellular Uplink & Ublox GPS module inside</li>
</ul>
EOD;

$rak2245_desc = <<<EOD
<ul class="text-white">
    <li>Compact design with GPS module on board</li>
    <li>Tx Power enhanced to 27dBm</li>
    <li>Fixable Heat Sink with Beautiful Design</li>
</ul>
<span style="color: #ffffff;" class="badge-md">Available Editions: </span<br><br>
<a href="https://www.aliexpress.com/store/product/RAK2245-Stamp-Edition-is-a-WisLink-LoRa-Concentrator-Module-based-on-SX1301-Pre-install-LoRa-gateway/2805180_32969733128.html?spm=2114.12010615.8148356.9.31fd75ebSJlCyX">
    <span style="background-color: #000000; color: #ffffff; cursor: pointer;" class="btn btn-xs btn-pill mb-2">Stamp</span>
</a>
<a href="https://www.aliexpress.com/store/product/RAK2245-96Boards-IoT-Edition-is-a-LoRa-Concentrator-Module-based-on-SX1301-Pre-install-LoRa-GATEWAY/2805180_32971742266.html?spm=2114.12010615.8148356.7.31fd75ebSJlCyX">
    <span style="background-color: #000000; color: #ffffff; cursor: pointer;" class="btn btn-xs btn-pill mb-2">96Boards</span>
</a>
<a href="https://www.aliexpress.com/store/product/RAK2245-Pi-HAT-is-a-LoRa-Concentrator-module-with-Raspberry-Pi-form-factor-based-on-SX1301/2805180_32970701346.html?spm=2114.12010615.8148356.5.31fd75ebSJlCyX">
    <span style="background-color: #000000; color: #ffffff; cursor: pointer;" class="btn btn-xs btn-pill mb-2">Pi Hat</span>
</a>
<br>
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
    'DIY Enterprise Gateway' => [
        'tag_line' => 'RAK7249',
        'description' => $diy_enterprise_gateway_desc,
        'images' => [
            '/assets/img/rakwireless/DIY_gateway.png'
        ],
        'store_link' => 'https://www.aliexpress.com/store/product/The-Enterprise-DIY-outdoor-LoRaWan-GATEWAY-Builtin-OpenWRT-OS-support-16-channel-LoRa-4G-WIFI-GPS/2805180_32974067371.html?spm=2114.12010615.8148356.3.31fd75ebSJlCyX',
        'slide_class' => 'gradient-half-semi-violet'
    ],
    'Pilot Gateway Pro' => [
        'tag_line' => 'RAK7243 Indoor Gateway',
        'description' => $pilot_gateway_pro_desc,
        'images' => [
            '/assets/img/rakwireless/pilot_gateway_pro.png'
        ],
        'store_link' => 'https://www.aliexpress.com/store/product/RAK7243-Pilot-GATE-WAY-Pro-Cellular-LoRa-Gateway-for-PoCn-Raspberry-Pi-3B-RAK2245-Pi-HAT/2805180_32971497653.html?spm=2114.12010615.8148356.2.31fd75ebSJlCyX',
        'slide_class' => 'gradient-half-semi-green'
    ],
    'WisLink LoRa Concentration Module' => [
        'tag_line' => 'RAK2245 Series',
        'description' => $rak2245_desc,
        'images' => [
            '/assets/img/rakwireless/RAK2245_stamp.png',
            '/assets/img/rakwireless/RAK2245_96boards.png',
            '/assets/img/rakwireless/RAK2245_pi_hat.png',
        ],
        'store_link' => 'https://store.rakwireless.com/',
        'slide_class' => 'gradient-half-semi-gray'
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
