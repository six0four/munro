<?php include '../include/prototypeheader.php';?>
    
                <DIV ID="Wrapper">

                        <ARTICLE ID="Article_1">
                                <HEADER ID="Header_Article_1">
                                        <H2>Getting Started</H2>
                                </HEADER>
<p>Getting started with a single board microcomputer, comprised of a 
900MHz 
quad-core ARM Cortex-A7 CPU with 1GB SDRAM, 10/100 Mbit/s Ethernet, 
GPIO, UART, I²C bus, SPI bus, and 8 GB of Secure Digital storage from 
the Humber College Institute of Technology & Advanced Learning North 
Campus Technology Parts Crib.
<img src="cribpi.jpg"></img></p>
                                <SECTION ID="Section_1">
                                        <H3>Equipment Sign Out</H3>
                                        <P>During reading week (or 
during a Monday, Tuesday, or Wednesday during the Winter 2016 
semester) go to 
the 
Humber North Campus J215 crib and fill out a chit slip with: <ol>
<li>Raspberry Pi</li>
<li>Raspberry Pi Power Supply</li>
<li>USB-Ethernet Adapter</li>
<li>Ethernet Cable</li>
</ol>
Show your ID and and the slip to the crib staff.
Take the borrowed equipment and go to a computer lab.
</p>
                                </SECTION>

                                <SECTION ID="Section_2">
                                        <H3>Booting up</H3>
<ol>
<li>Check that the desktop computer that you sit at is plugged in and turned on.</li>
<li>Log in with your HCNet ID and Password.</li>
<li>Plug the Raspberry Pi Power Supply into a line voltage power outlet but leave it disconnected from the Raspberry Pi.</li>
<li>Read and accept the academic computing agreement should you wish to continue.</li>
<li>Plug the Ethernet cable into the Rapsberry Pi at one end and into the HiRO USB-Ethernet adapter at the other end.</li>
<li>Install the appropriate HiRO driver <a 
href="http://www.hiroinc.com/drivers/H50223/H50223_Win7_v5.x.11.0_Drivers_Setup_v1.0.8.0.zip">
http://www.hiroinc.com/drivers/H50223/H50223_Win7_v5.x.11.0_Drivers_Setup_v1.0.8.0.zip</a> 
by first downloading the archive, then extracting all files, and 
executing setup.exe</li>
<li>Insert HiRO adapter into one of the desktop computer's USB ports.
<li>Connect power adapter to the Raspberry Pi.</li>
<!-- <li>Using Windows Explorer, navigate to: Control Panel\Network and 
Internet\Network 
and Sharing Center</li>
<li>select "Change adapator settings"</li>
<li>right click on the ASIX connection and choose properties</li>
<li>highlight 'Internet Protocol Version 4 (TCP/IPv4) and select 'Properties'</li>
<li>select the 'Use the following IP address' button</li>
<li>Enter in the address 169.254.0.4 with the subnet mask of 255.255.255.0 no Gateway is required</li>
<li>click Ok</li>
<li>click close</li> -->
<li>click the windows start menu and enter "Remote Desktop 
Connection" to start this application.</li>
<li>Enter the IP "169.254.0.2".</li>
<li>Click "Connect".</li>
<li>Click "Yes".</li>
<li>Click "OK".</li>
</ol>
</p>
										</SECTION>

                                <SECTION ID="Section_3">
                                        <H3>Blink an LED</H3>
                                        <p>
<ol>
<li>Open up a terminal by clicking on the terminal icon.</li>
<li>Create the file: <a 
href="http://munro.humber.ca/~mdrk0011/projects/traffic2B.c">http://munro.humber.ca/~mdrk0011/projects/traffic2B.c</a> 
with the appropriate contents using 
an editor such as ed, vi, vim, nano, leafpad, etc.
</li> 
<li>compile via: gcc -Wall -o traffic2B traffic2B.c -lwiringPi
<li>run via: sudo ./traffic2B</li>
</ol>
</p>
                                </SECTION>
                                <SECTION ID="Section_4">
                                        <H3>Returning Equipment</H3>
                                        <P><ol>
<li>Click on the "Raspberry" Menu.</li>
<li>Select "Shutdown..."</li>
<li>Click "OK".</li>
<li>Restart the desktop computer.</li>
<li>Disconnect both ends of the Ethernet cable.</li>
<li>Disconnect the 
USB-Ethernet adapter from the Desktop Computer.</li>
<li>Disconnect the 
Raspberry Pi Power Supply from Line voltage.</li>
<li>Go to the Humber North Campus J215 crib and return:</li></ol> <ol>
<li>Raspberry Pi</li>
<li>Raspberry Pi Power Supply</li>
<li>USB-Ethernet Adapter</li>
<li>Ethernet Cable</li>
</li>
</ol>
</p>
                                </SECTION>

                        </ARTICLE>

                </DIV>

<?php include '../include/switchcolumns.php';?>
    
                <NAV>
                        <UL>
                                <LI><a 
href="#Section_1">Equipment Sign Out</a></LI>
                                <LI><a 
href="#Section_2">Booting up</a></LI>
                                <LI><a 
href="#Section_3">Blink an LED</a></LI>
                                <LI><a 
href="#Section_4">Returning Equipment</a></LI>
                        </UL>
                </NAV>

<?php include '../include/prototypefooter.php';?>
