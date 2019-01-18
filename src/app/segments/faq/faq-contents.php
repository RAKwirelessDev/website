<?php

$c1q1 = <<<EOD
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">AT command module</th>
      <th scope="col">Transparent-transmission module</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Network connecting methods</th>
      <td>The host serial port needs to send commands to connect the network</td>
      <td>The network is automatically connected when the power is on</td>
    </tr>
    <tr>
      <th scope="row">The supported number of Socket</th>
      <td>8 sockets are supported</td>
      <td>Support 2-circuit socket</td>
    </tr>
    <tr>
      <th scope="row">Socket data transmitting and receiving</th>
      <td>The host serial port needs to send command to transmit data, 
      and the received data is with frame header and frame tail</td>
      <td>The data can be sent out wirelessly when the host directly throws data to the serial port, 
      and the wirelessly received data will have no frame header nor frame tail</td>
    </tr>
  </tbody>
</table>
EOD;
$c1q2 = <<<EOD
The host serial port can send <code>at+mac\\r\\n</code> to inquire the mac address of wifi module.
<br>
The host serial port can send <code>at+ipconfig\\r\\n</code> to inquire the ip address of wifi module.
EOD;
$c1q3 = <<<EOD
RAK415 module is transparent-transmission mode by default, which needs to be switched to the AT command mode firstly &mdash;
The host sends <code>+++</code> to request entering the command mode, and waits for the module to return <code>U</code> <i>(0x55)</i>; after receiving <code>U</code> <i>(0x55)</i>, the host will give the module the final confirmation information within 3s by sending <code>U</code> <i>(0x55)</i>; the module returns <code>OK</code> after receiving it and enters the command mode.
<br>
Send <code>at+mac\r\n</code> to inquire the mac address of wifi module.
<br>
Send <code>at+ipconfig\r\n</code> to inquire the ip address of wifi module.
EOD;
$c1q4 = <<<EOD
Three (3)
EOD;
$c1q5 = <<<EOD
<b>Interruption mode</b> &mdash; network disconnection event, socket disconnection event, data receiving will all actively inform the host;
<br>
<b>Inquire mode</b> &mdash; network disconnection event, socket disconnection event, data receiving will not actively inform the host, and the host needs to circularly or regularly send AT command to inquire.
<br><br>
For the host MCU with limited memory, if the sending speed of the opposite terminal is fast (and the serial port is working at the highest baud rate), the query mode can be adopted to control the speed of the module's sending data to the MCU host (the data is cached in the module, instead of immediately sent to the MCU host for processing, the host needs to send AT command to read), so the communication speed is slowed, but no packet will be lost.
EOD;
$c1q6 = <<<EOD
The default baud rate is <b>115200</b>; a highest of <b>921600</b> is supported.
<br><br>
The RAK413 and RAK473 command modules can configure the baud rate through AT commands, and the specific operation is as follows: <code>at+uartconfig=,,,,\\r\\n</code>
<br><br>
<div class="alert alert-primary" role="alert">
<h5 class="alert-heading">Note:</h5> The configuration of UART parameter is valid under the current status, and start up by the default parameter <b>115200</b> after reset. When soft reset the RAK413 <code>at+reset</code>, the baud rate keeps unchanged.
</div>
RAK415 transparent-transmission module wirelessly modifies the UART parameters:
<br><br>
- The scanning configuration tools provided by RAK are used, supporting the platforms of Windows and Android (the module is operating in the STA mode and has successfully connected the network); When using the WEB browser, after the module establishing AP or joining the router, input the module IP address in the address bar of the browser, then it can be visited.
<br>
- In AP mode, the IP address by default is the gateway address, such as <code>192.168.7.1</code>; when in STA mode, to join a router, if the IP address is automatically acquired and the module IP address cannot be confirmed, the scanning configuration tool can be used to conduct local scanning and discovery, after the address is obtained, the built-in WEB server of the module can be visited.
<br><br>
RAK415 transparent-transmission module modifies the UART parameters through AT commands:
<br><br>
- The command configuration tool provided by RAK is employed, and this tool can be used to evaluate and assist the AT command, can also batch modify the module's factory setting parameters and user parameters. The software opens its source code, so the customers can conduct self-design.
EOD;
$c1q7 = <<<EOD
- One-key
<br>
- WPS
<br>
- AP
EOD;
$c1q8 = <<<EOD
- Serial port upgrade
<br>
- WEB upgrade
EOD;
$c1q9 = <<<EOD
RAK413 has 4 power consumption modes:
<br><br>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">Mode</th>
      <th scope="col">Control section</th>
      <th scope="col">Wireless section</th>
      <th scope="col">Wake-up method</th>
      <th scope="col">Average power consumption</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>0</td>
      <td>Normal</td>
      <td>Normal</td>
      <td>Not needed</td>
      <td>80mA</td>
    </tr>
    <tr>
      <td>1</td>
      <td>Sleep_Mode</td>
      <td>Power_Save</td>
      <td>Not needed</td>
      <td>10mA</td>
    </tr>
    <tr>
      <td>2</td>
      <td>Deep_Sleep</td>
      <td>Power_Save</td>
      <td>UART data wake-up</td>
      <td>3mA</td>
    </tr>
    <tr>
      <td>3</td>
      <td>Deep_Sleep</td>
      <td>Shut_down</td>
      <td>UART data wake-up, Reset</td>
      <td>1.5uA</td>
    </tr>
  </tbody>
</table>

RAK473 has 2 power consumption modes:
<br><br>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">Mode</th>
      <th scope="col">Control section</th>
      <th scope="col">Wireless section</th>
      <th scope="col">Wake-up method</th>
      <th scope="col">Average power consumption</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Full power consumption</td>
      <td>Normal</td>
      <td>Normal</td>
      <td>Not needed</td>
      <td>80mA</td>
    </tr>
    <tr>
      <td>Save mode</td>
      <td>Sleep_Mode</td>
      <td>Power_Save</td>
      <td>Not needed</td>
      <td>30mA</td>
    </tr>
  </tbody>
</table>

RAK415 has 4 power consumption modes:
<br><br>
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">Mode</th>
      <th scope="col">Control section</th>
      <th scope="col">Wireless section</th>
      <th scope="col">Average power consumption</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Full power consumption</td>
      <td>Normal</td>
      <td>Normal</td>
      <td>80mA</td>
    </tr>
    <tr>
      <td>Auto-save</td>
      <td>Sleep_Mode</td>
      <td>Power_Save</td>
      <td>10mA</td>
    </tr>
    <tr>
      <td>The minimum power consumption<br>when the network is kept connected</td>
      <td>Deep_Sleep</td>
      <td>Power_Save</td>
      <td>3mA</td>
    </tr>
    <tr>
      <td>External wire-pull</td>
      <td>Deep_Sleep</td>
      <td>Shut_down</td>
      <td>1-2uA</td>
    </tr>
  </tbody>
</table>
EOD;
$c1q10 = <<<EOD
RAK415 module is transparent-transmission mode by default, the method of switching the transparent-transfer mode to the AT command mode is as follows:
<br><br>
The host sends <code>+++</code> to request entering the command mode, and waits for the module to return <code>"U</code> <i>(0x55)</i>; after receiving <code>U</code> <i>(0x55)</i>, the host will give the module the final confirmation information within 3S by sending <code>U</code> <i>(0x55)</i>; the module returns <code>OK</code> after receiving it and enters the command mode.
<br><br>
Under the AT command mode, sending <code>at+easy_txrx\r\n</code> to the module can switch back to the transparent-transfer mode.
EOD;
$c1q11 = <<<EOD
RAK473 module is in AT command mode by default, and the data mode only supports one transparent-transmission socket, after establishing the socket (TCP server has received the client connection, the TCP client is successfully connected to the server, and LUDP/UDP is successfully created), the host sends <code>at+data_mode\r\n</code> to the module to enter the transparent-transfer mode.
<br><br>
Passively exit the transparent-transmission mode: If the socket is disconnected, the module will actively exit the data mode and receive the return information. (During the TCP connection, whether the module actively or passively disconnect the socket, the module will actively exit the data mode; while for UDP connection, only when the module actively disconnect the socket, the module will actively exit the data mode)
<br><br>
Actively exit the transparent-transmission mode:
<br><br>
The host sends <code>+++</code> to request entering the command mode, and waits for the module to return <code>U</code> <i>(0x55)</i> ; after receiving <code>U</code> <i>(0x55)</i>, the host will give the module the final confirmation information within 3s by sending <code>U</code> <i>(0x55)</i>; the module returns </code>OK</code> after receiving it and enters the command mode.
EOD;
$c1q12 = <<<EOD
<b>RAK413</b> &mdash; The host needs to send AT command <code>at+ludp</code> to the module to establish a UDP server, then the cellphone APP requires the UDP broadcast data packet (with specified data format), the module will actively report to the host after receiving the broadcast. The host then parses the data packet, if the parsing is successful, the host will send the AT command <code>at+send_data</code> to the module and make the module send back the IP and Mac information, etc. to the mobile phone.
<br><br>
<b>RAK473</b> &mdash; The module is embedded with MDNS local discovery function, which allows the mobile phone APP to scan the module.
<br><br>
<b>RAK415</b> &mdash; The module is embedded with UDP server local discovery function, which allows the mobile phone APP to scan the module.
EOD;
$c1q13 = <<<EOD
<div class="alert alert-light text-body" role="alert">
<h5 class="alert-heading">RAK413:</h5>
<b>Link indicator light:</b>
<br>
<i>The module is connected to router under STA mode, the module is connected by STA under AP mode</i> &mdash; the light is on (output low level); Otherwise, the light is out.
</div>

<div class="alert alert-light text-body" role="alert">
<h5 class="alert-heading">RAK473:</h5>
<b>Link indicator light:</b>
<br>
<i>The module is connected to router under STA mode, the module is connected by STA under AP mode</i> &mdash; the light is on (output low level); Otherwise, the light is in slow flash.
<br>
<i>EasyConfig, WPS one-key configuration</i> &mdash; the light is in quick flash.
<br>
<i>During the upgrade process</i> &mdash; the light is in high speed flash.
</div>

<div class="alert alert-light text-body" role="alert">
<h5 class="alert-heading">RAK415:</h5>
<b>Status indicator light:</b>
<br>
<i>The module normally starts up</i> &mdash; the light is on (output low level).
<br>
<i>The module fails to start</i> &mdash; the light is out.
<br>
<i>The module is upgrading the firmware</i> &mdash; the light is in quick flash.
<br>
<i>The module is ready to enter the factory mode</i> &mdash; the light is in quick flash.
<br>
<i>Module appears upgrade error</i> &mdash; slow flash.
<br><br>
<b>Link indicator light:</b>
<br>
<i>The module is connected to router under STA mode, the module is connected by STA under AP mode</i> &mdash; the light is on (output low level); Otherwise, the light is out.
<br>
<i>EasyConfig, WPS one-key configuration</i> &mdash; the light is in quick flash.
</div>
EOD;
$c1q14 = <<<EOD
UDP communication is faster than TCP communication, because UDP communication is in non-connection mode, while TCP communication needs to go through three handshakes to establish the communication. But TCP communication is more stable and reliable than UDP communication. When it is required that no packet should be lost, TCP communication shall be chosen.
EOD;
$c1q15 = <<<EOD
Add <code>47uF</code> and <code>100nF</code> filter capacitor between the power and the ground.
EOD;
$c1q16 = <<<EOD
For WIFI module with onboard antenna, try to leave more space around the antenna, do not pavage below the antenna.
EOD;


$data->faq_contents = [
    'General' => [
        'What are the differences between the AT command module and the transparent-transmission module?' => $c1q1,
        'How do RAK413 and RAK 473 inquire the Mac, IP address of WiFi module?' => $c1q2,
        'How do RAK415 inquire the Mac, IP address of WiFi module?' => $c1q3,
        'How many devices are supported to access under the AP mode of RAK 473?' => $c1q4,
        'What are the differences between the interruption mode and query mode of RAK473 module?' => $c1q5,
        'How much is the default baud rate of the IoT WiFi module of RAK? What is the maximum value supported? How to set the baud rate?' => $c1q6,
        'What network distribution methods are supported by the IoT WiFi module of RAK?' => $c1q7,
        'What firmware upgrade methods does the IoT WiFi module of RAK have?' => $c1q8,
        'How many power consumption modes does the IoT WiFi module of RAK have?' => $c1q9,
        'How does RAK415 conduct the switching between the transparent-transmission mode and the command mode?' => $c1q10,
        'How does RAK473 switch between the data mode and the command mode?' => $c1q11,
        'How to discover the module within the local area network?' => $c1q12,
        'How to judge the status of module through indicating lights?' => $c1q13,
        'What are the differences between TCP and UDP and what are their applications?' => $c1q14,
        'What are the matters needing attention in power design?' => $c1q15,
        'What are the considerations of the antenna position?' => $c1q16
    ],
    'WiFi' => [
        'Why sometimes one-key configuration is not successful?' => 'fgdfg',
        'How to achieve one-key configuration in the roaming network?' => 'gdfgdfgdf',
        'How to ensure 100% success rate of configuration?' => 'dfgdfgdg',
        'How to ensure the effectiveness of socket link?' => 'fdhfdfh',
        'How to transplant UART WiFi drive?' => 'dfhdfgdfg',
        'How to deal with multi-socket communication?' => 'dfhdfhdh',
        'How to deal with network disconnection events?' => 'dfgdfhfde',
        'How to reduce power consumption?' => 'fgdfgdgd',
        'How to use auto connect command?' => 'dfghsfdhfg',
        'How to solve that WiFi cannot search any signal?' => 'sffd',
        'How does the module realize roaming?' => 'sdgsd',
        'How to solve serial abnormity?' => 'dfgds'
    ],
    'RAK4XX Series' => [
        'What are the actual fastest throughput rates of RAK41x、42x、43x ?' => 'sdfgsdg',
        'What are the differences between RAK41x, 42x and 43x?' => 'fdgdg',
        'What testing tools do RAK41x, 42x, 43x have? What SDK can be provided?' => '4te',
        'What sample codes do RAK41x, 42x, 43x provide?' => 'dgdfg',
        'Do RAK41x, 42x, 43x support remote upgrade?' => 'dfgdsfg',
        'How many devices can access when RAK41x, 42x, 43x are the AP? What are the maximum sockets supported by each of them?' => 'dfgdfg',
        'How many power consumption modes does RAK415 WiFi module have? How much is the power consumption under the various modes?' => 'dfgdfgf',
        'Do RAK41x, 42x, 43x support broadcast and multicast?' => 'dfgdfg',
        'Where can I download the related documents and materials about RAK41x, 42x, 43x?' => 'dgdfg',
        'What is the Easyconfig configuration? What modules of RAK support the Easyconfig configuration? Why sometimes the configuration is not successful?' => 'sdgsdg'
    ],
    'P2P Server' => [
        'What are the reasons for choosing Nabto?' => 'dfgsd',
        'Through what ways can the Nabto service be utilized?' => 'dfgdfg',
        'What are the differences between Nabto and Baidu video cloud?' => 'dfgdfg',
        'What are the well-known brands which has applied the Nabto service?' => 'dfgdfg',
        'What are the advantages of utilizing Nabto in foreign countries?' => 'dfgdfg',
        'What kinds of support can I get when applying Nabto?' => 'dfgdfg',
        'After purchasing Nabto Basestation, what data can I obtain from the Basestation backend?' => 'dfgdfg',
        'Why doesn\'t the TUTK charging pattern include the Basestation cost?' => 'sdgdsg',
        'Is Nabto a complete private cloud?' => 'dfgdfg',
        'How many terminals can one Basestation access?' => 'dfg',
        'Under what circumstances should I consider deploying a new Basestation?' => 'dfgdfg'
    ],
    'Others' => [
        'What are the characteristics and advantages of RAK WiFi module?' => 'dfgdfg',
        'What technical supports can the RAK WiFi module provide? Does it support SDK development?' => 'dfgdfgd,',
        'How to choose the embedded RAK WiFi module according to one\'s own needs?' => 'dfgdfgdfg',
        'What matters need to be paid attention to in designing hardware with RAK WiFi module?' => 'sfsdfds',
        'How to test the performance of RAK WiFi module?' => 'dddg',
        'What international certifications have RAK WiFi modules gone through? Are the customers required to provide the MAC address?' => 'sdgdg',
        'Do the RAK WiFi modules provide me with source codes for development?' => 'sdgdfg',
        'What are the differences between TCP communication and UDP communication?' => 'sdgdsg',
        'What is the packet loss rate of WiFi module relevant to?' => 'dfsfs',
        'How do the RAK WiFi modules upgrade the firmware? Can the client\'s MCU programme be upgraded through WiFi?' => 'sgdg'
    ]
];