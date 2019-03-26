<?php 

use CodeIgniter\HTTP\CURLRequest;

    $client = new CURLRequest(
        new \Config\App(),
        new \CodeIgniter\HTTP\URI(),
        new \CodeIgniter\HTTP\Response(new \Config\App()),
        $options
    );


