<?php

include "DNServer.php";

function dnshandler($dominio,$tipo)
{
    /*
    **    Every query will be answered as
    **    192.168.1.227
    */
    return "192.168.1.227";
}

$dns = new DNServer("dnshandler" /* callback function */, "127.0.0.1" /* needs the IP to listen in UnixLike OS in windows just need NULL*/);
