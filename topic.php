<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet"/>
    
    <!--Reference to external responsive CSS File-->
    <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>

    <title>Proxy Servers</title>
</head>

<body>
<?php include 'header.inc'; ?>
    
    <div class="content">

    <?php include 'menu.inc'; ?>

    <div id="article1">

    <hr>

    <h2>What is a proxy?</h2>

    <p> Proxy means to act on behalf of another In computer networking a proxy is 
        designed to perform requests and responses on behalf of another device.</p>

    <p>Usually when and individual wants information from the internet, they will 
        visit a website and utilise its resources, however their 
        public IP address is visible to others including the service they are using. 
        You are also limited by the amount of data and 
        resource you can obtain from the website or service; this is your bandwidth. 
        A proxy will send a request to the website to get data and then will 
        retrieve the data for you. A proxy provides a different IP address when an 
        individual connects to it. This is advantageous as it allows users to hide 
        their own IP address. This will change the users perceived location enabling 
        them to unblock prohibited content in their region, conduct market research 
        in other regions and many other things. A proxy can also filter all outgoing 
        and incoming requests which can prevent malicious or harmful attacks as well 
        as block certain content.</p>


        <aside>
            <h4>Special Feature</h4>
            <p>A proxy server can alter the data and resources it gives to a client, 
                and if the this data is accessed repeatedly by different clients 
                it can use a cache to make it faster to access. A cache allows for 
                previously accessed information to be saved for future use.</p>
        </aside>
          

        <figure>
        <img src="images/proxy_process.jpg" alt="cybersecurity" height="200">
        <figcaption>Fig.1 - Simplified depiction of a proxy </figcaption>
      </figure>
<!--
    <p><b>There are two types of proxies</b></p>
-->

    <table style="width:100%">
        <tr>
            <th>Proxy type</th>
            <th>Forward Proxy</th>
            <th>Reverse Proxy</th>
            <th>Full proxy</th>
            <th>Half Proxy</th>
        </tr>
        <tr>
            <td>Defintion</td>
            <td>
                Forward proxies are the most common proxies. These proxies sit between two 
                network and have the primary objective of content filtering and caching 
                services. Forward proxies, traditionally, have been used by large service 
                providers that act as a intermediary between the public internet and their 
                isolated network of subscribers.
            </td>
            <td>
                Reverse proxies are less common than their counter part full proxies. 
                Reverse proxies process requests for applications from the public internet 
                to the internal private network of a service. They are referred to as reverse 
                proxies as they sit Infront of private internal networks and process information 
                incoming from the public network.
            </td>
            <td>
                Half proxy is a description of how a reverse or forward proxy functions. In a 
                half proxy the client will connect to the poxy, then the proxy will then establish 
                a connection to the application. The resources will then respond and then pass 
                that information back to the client through the proxy.

            </td>
            <td>
                In a full proxy the client can manipulate and inspect the traffic on both the request 
                and response side of the traffic. A full proxy creates a client connection along with 
                a separate server connection with a little gap in the middle. The client connects to 
                the proxy on one end and the proxy establishes a separate, independent connection to 
                the server.
            </td>
    
        </tr>
    </table>

    <h3>Examples of Proxies</h3>

    <dl>
        <dt>Encryption</dt>
        <dd>Proxies usually use some sort of encrypted link between the user and the end-website or
            application to prevent other users on the network from snooping on a user's traffic.
        </dd>
        <dt>Private browsers</dt>
        <dd>Proxy servers are often accessed through private 
            browser. A private browser is a browser with an inbuilt proxy, so it only reveals 
            the IP address of the proxy to the website while protecting the user’s IP address.
        </dd>
        <dt>Security/firewall implementation</dt>
        <dd>A firewall only monitors incoming and outgoing traffic from a 
            server however when implemented with a proxy, it allows for the 
            firewall to evaluate the request from a service or user and 
            permit or deny the request based on the security rules and 
            conditons.
        </dd>
    </dl>
    

    <h2>History of Proxies</h2>

    <section class="child">
        <h3>Past</h3>
        <p>Proxy servers have been present within the field of networks and servers for a while, 
            however there is a lack of information surrounding the origin of proxy servers. It is 
            assumed that proxy servers were first established in the intitial stages of web 
            development and commercial use of the internet.
        </p>  
    </section>

    <section class="child">
        <h3>Future and Present</h3>
        <p>As the world becomes more assimilated with technology the need for security and privacy 
            will only increase. This is why proxies will be a necessity in the future of the internet 
            and web. In all aspects of life proxies will be, and are currently being, used to provide 
            security and protection whether that be through simple vpns or elaborate firewalls protecting large 
            institutions. Companies such as cisco, Norton and many others will only grow in popularity 
            as more delicate and confidential information is uploaded and transferred through the internet.
        </p>
    </section>


    <hr>

    <h3>References</h3>
    <p>
        <a href = "https://www.rswebsols.com/tutorials/technology/proxy-server-advantages-disadvantages">RS 
            Web Solutions. 2022. The Advantages and Disadvantages of Proxy Server. [online]</a> 
    </p>
    <p>
        <a href="https://www.brighthub.com/computing/smb-security/articles/64398/#history-of-proxy">Brighthub.com.
             2022. The History of Proxy Servers. [online]</a> 
    </p>
    <p>
        <a href="https://www.pcmag.com/encyclopedia/term/proxy-server">PCMAG. 2022. What Is A Proxy Server?. [online]</a>
    </p>

    </div>
    </div>

<?php include 'footer.inc';?>
</body>
</html>