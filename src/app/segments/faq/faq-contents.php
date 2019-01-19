<?php

/** General */

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

/** WiFi */

$c2q1 = <<<EOD
When one-key configuration fails, there may be one or more of the following reasons:
<br><br>
- Password input error;
<br>
- The client terminals connected to the router are too many;
<br>
- The router does not open DHCP;
<br>
- The router has opened WMM or AP isolation.
EOD;
$c2q2 = <<<EOD
<b>Roaming network</b> &mdash; There are two routers with the same SSID in the network;
<br><br>
When the mobile phone APP is connected to the router, it will send SSID (BSSID) and PSK to the module, the module will connect the router through BSSID.
EOD;
$c2q3 = <<<EOD
When easyconfig (WPS) is unsuccessful, configure the network with AP.
EOD;
$c2q4 = <<<EOD
For the TCP connection, the mechanism of sending heartbeat packet can be adopted to detect whether the connection is effective.
EOD;
$c2q5 = <<<EOD
RAK473 sample code is specific to applications without OS, and its feature is that the AT command which is not timely responded will not be blocked. The already transplanted platforms include STM32F10x, Nano1xx. To make transplantation to other platforms, the user only needs to accomplish the following functions:
<br><br>
<ol>
  <li>Reset wifi module function;</i>
  <li>Serial port initialization (serial RX enable and pull up), serial port sending, serial port receiving interrupts;</i>
  <li>Timer - realize time delay (MS), time stamp function;</i>
</ol>
EOD;
$c2q6 = <<<EOD
RAK415 transparent-transmission module supports a maximum of two-circuit socket pass-through, the user can use it after simple configuration, and the configuration parameter will not be lost when the power is off. If the user needs more than 2 sockets for communication, the AT command module can be chosen.
<br><br>
RAK413 AT command module supports a maximum of 8-circuit socket, and the data receiving is in interruption mode. For several TCP clients, the host sends AT commands to the module to connect to the server, <code>OK+port identifier</code> will be returned when the connection is successful, and the host will send command to the module to transmit data according to the port identifier, then the received data will also include port identifier to judge which socket has received the data.
<br><br>
For TCP server, it will be reported to the host each time a client is connected, the reporting information includes the IP information and port identifier of client, and the host will send command to the module to transmit data according to the port identifier, then the received data will also include port identifier to judge which socket has received the data.
<br><br>
RAK473 AT command module supports a maximum of 8-circuit socket and also supports one-circuit socket transparent-transfer. And the data receiving supports the interruption mode and the query mode. The interruption mode is the same as that of RAK413. Under the Query mode, for the TCP client, the host sends AT commands to the module to connect the server, <code>OK+port identifier</code> will be returned when the connection is successful, then the host will give commands to the module to send and receive data according to the port identifier; while for the TCP server, the host sends commands to the module to establish TCP server, the module will return <code>OK+port identifier</code> when the establishment is successful, then the host needs to send the command <code>at+socket_status</code> to the module to inquire the IP information and port identifier of the current client connected to the server, and then give commands to the module to transmit and receive data through the port identifier of client.
EOD;
$c2q7 = <<<EOD
RAK4x3 orders the module to notify the host when the network is disconnected, if previously the network connecting parameters are saved, <code>at+auto_connect\\r\\n</code> can be implemented to reconnect the network.
EOD;
$c2q8 = <<<EOD
RAK413's lowest power consumption is merely 2uA, at that time, the control section of the module goes into deep sleep and the wireless part is shut down. To awaken, the serial port needs to send data to wake up or pull wire to reset the module, under normal conditions, the module will soon re-connect the router. If the module cannot normally connect the router, it is recommended that reset the module and re-connect the router through <code>at+auto_connect\\r\\n</code>.
<br><br>
The power consumption of RAK473 under saving mode is 30-50mA. If keeping network being connected, the communication speed is slightly less than that under the mode of full power consumption
<br><br>
The minimum power consumption of RAK415 is only 2uA. If the module faces full power down, the module will automatically connects the internet after power-on.
EOD;
$c2q9 = <<<EOD
For RAK4x3 AT command module, after the success of one-key configuration, WPS or AP configuration, the network connecting parameters will be saved into the flash inside the module, and then through sending <code>at+auto_connect\\r\\n</code> the module will automatically connect the internet.
EOD;
$c2q10 = <<<EOD
<b>Operation steps:</b>
<br><br>
<i>RAK4x3 AT command module</i> &mdash; The host sends <code>at+start_web\\r\\n</code> to enter AP configuration mode.
<br>
<i>RAK415 transparent-transmission module</i> &mdash; Through the PC serial port configuration tool, configure the module as AP mode, the process of which can also be adopted when the MCU host configures the module as AP mode.
<br><br><br>
<b>Reasons:</b>
<br><br>
<ol>
  <li>Insufficient power supply &mdash; The module operates with voltage of 3.0-3.6v and current of 80MA, so the wifi cannot be searched if this requirement is not met.</li>
  <li>No signal can be detected due to there is no power.</li>
  <li>Check the module antenna is on-board or external antenna; if it is an external antenna, check whether the antenna is loose or disconnected.</li>
  <li>Whether the distance from the module to the computer searching end is too far, the indoor distance shall be within 50 meters, or use the wifi search function of mobile phone to search.</li>
  <li>Check whether the computer's wireless network card is open, or check whether the dialog box of computer wireless network connection has the SSID of module.</li>
</ol>
EOD;
$c2q11 = <<<EOD
With the SSID, PSK of two routers set as the same, when connecting the network, the module will first scan the network with the command <code>at+scan=0\\r\\n</code>, then utilize the BSSID of the router with stronger signal to connect the internet.
EOD;
$c2q12 = <<<EOD
<b>There are usually two reasons for messy codes:</b>
<br><br>
<ol>
  <li>The baud rate, data bit, parity bit do not match, namely, the baud rates of our network to serial device and your serial device does not match, which can be solved by setting them as the same.</li>
  <li>Hardware reasons. Note that the electricity level forms of TTL, RS232, RS485 are different, which cannot be directly connected and needs to make transmission with the 232 chip or 485 chip. One of the customers' most frequent mistakes is that the TTL electricity level is directly connected to the computer, which will certainly cause messy codes, for the computer is in RS232 electricity level. In addition, if the hardware design is improper and there is interference, it may also result in communication abnormality. So carefully check the hardware.</li>
</ol>
<br><br>
<b>If you cannot determine where the problem is, the method of self-transmitting and receiving can be adopted to exclude problems:</b>
<br><br>
<ol>
  <li>Your device directly communicates with the computer, and setting the baud rate according to your understanding, check whether it works normally and determine if there is a problem with your settings;</li>
  <li>Disconnect the connection between your device and the network module, and short circuit the RXD and TXD of our module serial port, then through the network sending and receiving see whether the data is normal, so as to determine if our module works well;</li>
  <li>Disconnect the connection between your device and the network module, and short circuit the sending and receiving of your equipment serial port, then see whether the data is normal through the self-sending and self-receiving of computer, in this way, you can find out whether the hardware between your computer and the serial port works properly;</li>
</ol>
It is believed that through these steps, most of your problems can be solved. If problems remain unsolved, you can directly contact our staff, we will help you cope with the problems, and we can also provide you with remote assistance till your problems are solved.
EOD;

/** RAK4XX Series */

$c3q1 = <<<EOD
WiFi module with UART interface: RAK413/423, RAK415/425, when the baud rate of which is set as <code>921600</code>, the actual throughput rate can reach 70KB/S;
<br><br>
WiFi module with SPI interface: RAK411/421, the actual throughput rate can reach 220KB/S.
EOD;
$c3q2 = <<<EOD
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Hardware</th>
      <th scope="col">Software</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RAK41x</th>
      <td>Stamp hole encapsulation</td>
      <td>RAK411/421/431 is the WIFI module with SPI interface, which has faster transmission speed.</td>
    </tr>
    <tr>
      <th scope="row">RAK42x</th>
      <td>Pin encapsulation, smaller size</td>
      <td>RAK413/423/433 is AT command module with UART interface and simultaneously supports the establishment of 8 Sockets.<br><br>They are powerful and have strong flexibility.</td>
    </tr>
    <tr>
      <th scope="row">RAK43x</th>
      <td>minimum size</td>
      <td>RAK415/425/435 is transparent-transmission module with UART interface, which requires no network, has socket management, and only needs to be configured properly.<br><br>They are simple and convenient to use.</td>
    </tr>
  </tbody>
</table>
EOD;
$c3q3 = <<<EOD
<table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Testing tools</th>
      <th scope="col">SDK</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">RAK415/425/435</th>
      <td>Easyconfig configuration tool, wireless configuration tool, and AT command configuration tool</td>
      <td>Easyconfig configuration tool (Android/iOS), wireless configuration tool (PC/Android/iOS)</td>
    </tr>
    <tr>
      <th scope="row">RAK413/423/433</th>
      <td>Easyconfig configuration tool, AT command configuration tool</td>
      <td>Easyconfig configuration tool (Android/iOS)</td>
    </tr>
    <tr>
      <th scope="row">RAK411/421/431</th>
      <td>Easyconfig configuration tool, AT command configuration tool</td>
      <td>Easyconfig configuration tool (Android/iOS)</td>
    </tr>
  </tbody>
</table>
EOD;
$c3q4 = <<<EOD
RAK41x/42x/43x all provide relevant sample codes, which include how to configure the module, how to inquire the module status, how to communicate, etc., so as to assist you in quick development.
EOD;
$c3q5 = <<<EOD
RAK41x/42x/43x all supports remote upgrade, which facilitates the customers to update module firmware whenever and wherever. For specific upgrade methods you can view the user manual of each module model.
EOD;
$c3q6 = <<<EOD
RAK41x/42x/43x currently support the access of one device;
<br><br>
RAK415/425/435 supports a maximum of dual socket;
<br><br>
RAK413/423/433 and RAK411/421/431 support a maximum of 8 sockets. Please note that when the module establishes 1 TCP Sever, it actually occupies 2 sockets (one of which is reserved to TCP Client for connection), so in such situation, a maximum of 4 TCP Sever can be simultaneously established.
EOD;
$c3q7 = <<<EOD
<b>RAK415 WiFi module has 4 power consumption modes, respectively:</b>
<br><br>
- The full-speed working mode. The average power consumption ~80ma, peak current <200ma
<br>
- The automatic power saving mode. The average power consumption ~ 10ma, peak current < 200ma, DTIM=100ms
<br>
- Mode of the minimum power consumption while keeping the network connected. The average power consumption ~ 3ma, peak current < 200ma, DTIM=100ms (a maximum of 115200bps is supported)
<br>
- The external wire-pull, ultra-low power consumption mode. 1-2uA
EOD;
$c3q8 = <<<EOD
RAK41x, 42x, 43x all supports radio broadcasting (broadcast within the network segment and the whole network broadcast). Currently only RAK413/423/433 supports the multicast.
EOD;
$c3q9 = <<<EOD
There are download addresses in our official website (click on the "hardware" at the top right of the official website to acquire the product information you are interested in), you can also directly click on the "reading the original text" at the bottom.
EOD;
$c3q10 = <<<EOD
In the easyconfig mode, module is in the state of packet capture, when you can send the router information to the module through mobile phone and other client terminals, so the module can successfully connect the internet with configuration.
<br><br>
All modules of RAK support the Easyconfig configuration.
<br><br>
The configuration is unsuccessful for many reasons: the complex network environment, the low signal value of module, some special settings of the router are all likely to cause the failure of Easyconfig configuration.
EOD;

/** P2P Server */

$c4q1 = <<<EOD
- Absolute advantages of overseas development. With Nabto's patented technology, you are more degage in expanding overseas markets;
<br><br>
- No matter how complicated the environment is, Nabto can all easily support. So far, Nabto has solved more than 100 kinds of firewall systems, and also achieved a perfect compatibility of 5~10 mobile phone operating systems and mainstream browsers;
<br><br>
- Accelerate the time to market of your products. SDK package provided by Nabto can greatly reduce your R&D costs. When using our service, you can accomplish the corresponding research and development tasks with only 20% of the workload of your competitor;
<br><br>
- Lots of your costs are saved. Nabto has a large number of long-term customers, with many years of industry experience, our service mode has become very mature and been widely recognized;
<br><br>
- The fully optimized usage design escorts your development strategy. The professional technology of Nabto ensures the simplicity of service and the low power consumption. Meanwhile, the simple and rapid development of integration guarantees the rapid implementation of your internet strategy;
<br><br>
- The comprehensive technical optimization reduces your various burdens and costing. The optimization of hardware costs allows you to experience the best service with the least equipment resources; through the P2P connection, the cloud computing time is minimized, and it has improved the convenience of cloud data storage, search and management, and realized the minimum delay of network transmission as well;
<br><br>
- Friendly using experience. The user management interface is instant in response and pretty friendly, with the user management framework being provided. Meanwhile, you can also conveniently send emails and SMS through the built-in event processing platform, and the management framework of equipment is also provided;
<br><br>
- Perfect privacy protection. Adopt the authentication and encryption based on the SSL to fully guarantee the privacy of data. Publicly encrypted cloud data can only be directly managed by authenticated users;
<br><br>
- The HTML device driver technology adopted has well solved the positioning problem, and creates OEM interface for your device;
<br><br>
- Simplified business model. Nabto, with its years of experience in the industry, provides you with a simplified cooperation method. Whether you want to obtain the ownership of the whole platform, or make basic cooperation, Nabto can help you to realize with its professional technology;
<br><br>
- The installation and commissioning of equipment can be carried out on one's own;
<br><br>
- Nabto is software, which allows you to fully take charge of the use of hardware. Nabto only needs a C compiler and internet access device (WiFi, Ethernet, GPRS, etc.) to provide service.
EOD;
$c4q2 = <<<EOD
According to whether you purchase the RAK hardware products or not, the users are grouped into the following two conditions:
<br><br>
<table class="table table-responsive">
  <tbody>
    <tr>
      <th rowspan="2" scope="row">Purchase RAK hardware</th>
      <td>Public cloud</td>
      <td>You can choose the module with embedded Nabto protocol stack, so that you can obtain the permanent free use of Nabto's P2P service without extra charges!</td>
    </tr>
    <tr>
      <td>Private cloud</td>
      <td>You can choose the module with embedded Nabto protocol stack and also buy Nabto Basestation, so as to complete the building of your private cloud.</td>
    </tr>
    <tr>
      <th rowspan="2" scope="row">Not purchase RAK hardware</th>
      <td>Public cloud</td>
      <td>RAK is responsible for the platform transplantation; you need to pay for each Device ID.</td>
    </tr>
    <tr>
      <td>Private cloud</td>
      <td>You need to purchase Nabto Basestation through RAK by yourself, and pay the node fees according to each ID, and also pay the server rental costs on your own.</td>
    </tr>
  </tbody>
</table>
EOD;
$c4q3 = <<<EOD
What Nabto supports is P2P cloud architecture, while Baidu video cloud is in the relay mode.
<br><br>
The biggest difference between the two is the different cloud architectures, which is directly reflected in the huge difference in the costings of the cloud servers. The relay mode of Baidu video cloud has pretty high requirements for the server's CPU, memory, storage, and especially for the bandwidth; nevertheless, in the P2P architecture of Nabto, the server only serves to build connection between peer A and peer B, and the direct transmission between A and B does not go through any server, which greatly reduces the occupation and consumption of server.
EOD;
$c4q4 = <<<EOD
<b>With its professional technology and good reputation, Nabto has been chosen by a number of well-known brands, mainly including:</b>
<br><br>
- Danfoss &mdash; Solar Inverters
<br><br>
- Honeywell &mdash; (HVAC)
<br><br>
- Johnson Controls
<br><br>
- Schneider
<br><br>
- DVEtech &mdash; Windturbine inverters.
<br><br>
- Liebherr &mdash; Refrigerators.
<br><br>
- Sorel &mdash; Home energy controlling.
<br><br>
- Milestone Systems &mdash; World largest video portal for surveillance.
<br><br>
- ZenseHome Systems &mdash; Home automation.
<br><br>
- WindowMaster &mdash; Natural ventilation http://www.windowmaster.com/
<br><br>
- Velux &mdash; Top windows.
<br><br>
- Big Dutchman &mdash; Ventilation for piggery and chicken farms etc. http://www.bigdutchman.de/
  <br><br>
- Ritzau &mdash; News agency http://www.ritzau.dk/
<br><br>
- Sirona Dental &mdash; Autoclaves.
<br><br>
- Consulo &mdash; Home automation
<br><br>
- Cosesy &mdash; Home automation
<br><br>
- Zeteco &mdash; Wind turbines.
<br><br>
- <i>CONFIDENTIAL</i> &mdash; The second largest vendor of hearing aids – Exclusivity
<br><br>
- <i>CONFIDENTIAL</i> &mdash; 4 of the 10 biggest IP camera vendors in the world.
EOD;
$c4q5 = <<<EOD
<b>Nabto's unique patented technology and consistent high quality service can ensure that your products have strong competitiveness in foreign countries as well:</b>
<br><br>
- Through the servers deployed in many parts of the world by Nabto, you can get closer to your customers and set up your own private cloud or use the public cloud of Nabto, so as to fully meet the regional requirements of your application;
<br><br>
- Nabto has opened the SDK source code, so that you can make more adaptive optimization in the details;
<br><br>
- Nabto has a huge number of long-term customers in Europe and the United States and is a widely acclaimed brand of strength;
<br><br>
- The P2P crossing rate of Nabto is higher than the level of the same industry (e.g. TUTK).
EOD;
$c4q6 = <<<EOD
<b>You can get supports including but not limited to:</b>
<br><br>
- Local support for RAK;
<br><br>
- Provide SDK package, APP development library, technical support, answering questions and other professional services;
<br><br>
- The whole-course service and support of renting Amazon server;
<br><br>
- Test the ID of server.
EOD;
$c4q7 = <<<EOD
<b>After purchasing the Nabto Basestation, through the background you can acquire:</b>
<br><br>
- The firewall type at each end;
<br><br>
- The connection status: including P2P, Relay, local and error (providing error code), version, etc.;
<br><br>
- The status of device registration: including success, failure (providing the error code), version, etc.;
<br><br>
- The data stream size of P2P, Relay (needing to be further confirmed).
<br><br><br>

<b>Meanwhile, you can also:</b>
<br><br>
- View the online status of device anytime;
<br><br>
- View the online time duration anytime;
<br><br>
- View the IP address of device anytime;
<br><br>
- Obtain the version information of device at any time;
<br><br>
- View the Relay connection information anytime;
<br><br>
- Observe the Relay code stream size anytime;
<br><br>
- And various other diagnostic information.
EOD;
$c4q8 = <<<EOD
The reason why TUTK does not charge users for Basestation is because that viewed from its structure, Basestation is divided into two parts: one is Controller and the other is GTC. Only the Controller section is run by TUTK, while GTC is actually the rental space you deployed in Amazon, which is not operated by TUTK.
<br><br>
Since TUTK cannot provide you with real private cloud service, the TUTK charging mode does not include this cost.
EOD;
$c4q9 = <<<EOD
As long as you purchase the Nabto Basestation, the P2P building of private cloud has actually been accomplished.
<br><br>
Since Nabto Basestation works completely independently, it only needs to make a confirmation of the ID domain name with the Nabto central server regularly. For the already transmitted status information of Basestation Nabto and for each video connection, Nabto Basestation does not need to utilize the central server.
<br><br>
Hence, as long as you have purchased the Nabto Basestation, you have completed a real sense of private cloud building.
EOD;
$c4q10 = <<<EOD
If you use an EC2 server of quad core and 4GB memory, devices of 100k can be linked. By analogy, if you expect an amount of 300K, you can rent three EC2 servers, or upgrade the CPU to sixteen cores and memory to 12GB in the case of one server.
<br><br>
To prevent the server fault of the Amazon cloud, it is strongly recommended that you rent one more server to guarantee 100% of normal daily use.
EOD;
$c4q11 = <<<EOD
When your product sales area increases, to provide better services for your customers, a Basestation is needed to be rented nearby. Certainly, this is computed in accordance with the concept of countries or even continents, if your selling is merely within China, there is no need for renting Basestation in every place.
EOD;

/** Others */

$c5q1 = <<<EOD
The RAK WiFi has a variety of models, multiple and complete functions, and comprehensive coverage. The WiFi module series include UART, SPI, SDIO, Video, Secondary development, etc. and are characterized by small package, low power consumption, complete configuration tool and easy to use.
<br><br>
Meanwhile, we provide professional Cloud server, and plus our comprehensive firmware customization, SDK development board as well as timely technical support, the users are provided with a competitive integrated WiFi solution!
EOD;
$c5q2 = <<<EOD
The full range RAK WiFi modules all supply you with detailed specifications, user manuals and a variety of configuration tools, more attentively, we provide you with a number of first-rate services such as hardware reference design, PCB encapsulation and program guidance and so forth.
<br><br>
In the meantime, RAK will provide customers with complete SDK development kit basing on the platforms of Android, iOS and Windows, which shall relieve your follow-up development concerns.
EOD;
$c5q3 = <<<EOD
You can make choice according to the standards such as the communication interface (SPI/UART), the module usage methods (AT command / transparent-transmission), requirements for the volume, requirements for the antenna, requirements for hardware encapsulation, etc., and for specific information click here to view table of model selections.
<br><br>
Meanwhile, RAK suggests that you communicate with our professional technical support staff, so as to select the most suitable WiFi module for your development. Contact us.
EOD;
$c5q4 = <<<EOD
Add 47uF and 100nF filter capacitor between the power and the ground;
<br><br>
When using the WiFi module with onboard antenna, try to leave more space around the antenna, and no pavage below the antenna.
<br><br>
When layout PCB, please be sure to refer to the reference in the specification brochure for circuit design and send it to the technical support of RAK for review
EOD;
$c5q5 = <<<EOD
RAK has carried out detailed testing for each model of WiFi module and has formed a series of test reports. If you want to conduct the test on your own, it is recommended that you buy the corresponding WiFi module EVB for testing.
<br><br>
On the EVB demoboard, you can carry out a series of performance testing, such as power consumption test, communication test, MCU joint test and so forth. Simultaneously, RAK recommends that, during the test, you choose your concerned issues for targeted testing, so as to shorten the testing and development time.
EOD;
$c5q6 = <<<EOD
Our full-range RAK module products have passed the FCC and CE certifications, and the MAC address has been burner-recorded in the module, therefore you need not to purchase.
EOD;
$c5q7 = <<<EOD
Sorry, we currently do not provide the modules’ source codes, but we can provide you with firmware customization. For the WiFi module like RAK412, which can be conducted secondary development, we can provide the library function for development, and also provide you with timely technical support.
EOD;
$c5q8 = <<<EOD
UDP communication is faster than TCP communication, because UDP communication is in non-connection mode, TCP communication needs to go through three handshakes to establish the communication connection. But TCP communication is more stable and reliable than UDP communication. If you require to not to lose packet, you should choose TCP communication.
EOD;
$c5q9 = <<<EOD
The packet loss rate of WiFi module is related to the current network condition, signal strength, data volume and the external disturbance, etc.
EOD;
$c5q10 = <<<EOD
RAK's WiFi module supports super terminal upgrade, and it supports the wireless upgrade of WiFi as well.
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
        'Why sometimes one-key configuration is not successful?' => $c2q1,
        'How to achieve one-key configuration in the roaming network?' => $c2q2,
        'How to ensure 100% success rate of configuration?' => $c2q3,
        'How to ensure the effectiveness of socket link?' => $c2q4,
        'How to transplant UART WiFi drive?' => $c2q5,
        'How to deal with multi-socket communication?' => $c2q6,
        'How to deal with network disconnection events?' => $c2q7,
        'How to reduce power consumption?' => $c2q8,
        'How to use auto connect command?' => $c2q9,
        'How to solve that WiFi cannot search any signal?' => $c2q10,
        'How does the module realize roaming?' => $c2q11,
        'How to solve serial abnormity?' =>$c2q12
    ],
    'RAK4XX Series' => [
        'What are the actual fastest throughput rates of RAK41x, 42x, 43x?' => $c3q1,
        'What are the differences between RAK41x, 42x and 43x?' => $c3q2,
        'What testing tools do RAK41x, 42x, 43x have? What SDK can be provided?' => $c3q3,
        'What sample codes do RAK41x, 42x, 43x provide?' => $c3q4,
        'Do RAK41x, 42x, 43x support remote upgrade?' => $c3q5,
        'How many devices can access when RAK41x, 42x, 43x are the AP? What are the maximum sockets supported by each of them?' => $c3q6,
        'How many power consumption modes does RAK415 WiFi module have? How much is the power consumption under the various modes?' => $c3q7,
        'Do RAK41x, 42x, 43x support broadcast and multicast?' => $c3q8,
        'Where can I download the related documents and materials about RAK41x, 42x, 43x?' => $c3q9,
        'What is the Easyconfig configuration? What modules of RAK support the Easyconfig configuration? Why sometimes the configuration is not successful?' => $c3q10
    ],
    'P2P Server' => [
        'What are the reasons for choosing Nabto?' => $c4q1,
        'Through what ways can the Nabto service be utilized?' => $c4q2,
        'What are the differences between Nabto and Baidu video cloud?' => $c4q3,
        'What are the well-known brands which has applied the Nabto service?' => $c4q4,
        'What are the advantages of utilizing Nabto in foreign countries?' => $c4q5,
        'What kinds of support can I get when applying Nabto?' => $c4q6,
        'After purchasing Nabto Basestation, what data can I obtain from the Basestation backend?' => $c4q7,
        'Why doesn\'t the TUTK charging pattern include the Basestation cost?' => $c4q8,
        'Is Nabto a complete private cloud?' => $c4q9,
        'How many terminals can one Basestation access?' => $c4q10,
        'Under what circumstances should I consider deploying a new Basestation?' => $c4q11
    ],
    'Others' => [
        'What are the characteristics and advantages of RAK WiFi module?' => $c5q1,
        'What technical supports can the RAK WiFi module provide? Does it support SDK development?' => $c5q2,
        'How to choose the embedded RAK WiFi module according to one\'s own needs?' => $c5q3,
        'What matters need to be paid attention to in designing hardware with RAK WiFi module?' => $c5q4,
        'How to test the performance of RAK WiFi module?' => $c5q5,
        'What international certifications have RAK WiFi modules gone through? Are the customers required to provide the MAC address?' => $c5q6,
        'Do the RAK WiFi modules provide me with source codes for development?' => $c5q7,
        'What are the differences between TCP communication and UDP communication?' => $c5q8,
        'What is the packet loss rate of WiFi module relevant to?' => $c5q9,
        'How do the RAK WiFi modules upgrade the firmware? Can the client\'s MCU programme be upgraded through WiFi?' => $c5q10
    ]
];