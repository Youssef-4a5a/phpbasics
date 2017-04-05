<?php
error_reporting(E_WARNING);

require("ass011_class.php");

switch($_REQUEST["submit"]){
    case 'create':
        $afile = new fileHandler($_REQUEST["fileName"]);
        echo "Het bestand is aangemaakt.";
//        var_dump($afile->create($_REQUEST["fileName"], $_REQUEST["fileContent"]));
        break;
    case 'update':
        $afile = new fileHandler($_REQUEST["fileName"]);
        echo "Het bestand is geupdate.";
//        var_dump($afile->update($_REQUEST["fileName"], $_REQUEST["fileContent"]));
        break;
    case 'read':
        $afile = new fileHandler($_REQUEST["fileName"]);
//        var_dump($afile->read($_REQUEST["fileName"], $_REQUEST["fileContent"]));
        break;
    case 'delete':
        $afile = new fileHandler($_REQUEST["fileName"]);
        echo "Het bestand is verwijdert.";
//        var_dump($afile->delete($_REQUEST["fileName"], $_REQUEST["fileContent"]));
        break;
    case 'multifiles':
        $afile = new fileHandler($_REQUEST["fileName"]);
        echo "Meerdere bestanden zijn aangemaakt.";
        break;
    default:
        echo "Geen enkele van de dingen die gebeuren zijn niet bekend";
        break;
}

?>
