<?php

if(isset($_GET['meth']))
{
    switch ($_GET['meth'])
    {
        case 'ordini':
            include('pages/ordini.php');
            break;
        case 'ricerca':
            include('pages/ricerca.php');
            break;
    }
}
else
{
    include('pages/ordini.php');
}