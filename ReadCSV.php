<?php
/**
 * Created by PhpStorm.
 * User: lloum
 * Date: 3/11/2019
 * Time: 9:01 PM
 */

class getCSV
{


    public static function ReadCSV(String $samplefile)
{
    $rfile = fopen($samplefile, "r");
    return $rfile;
}


    public static function CSVtoArray(String $rfile)
    {
        while (!feof($rfile))
        {
            $wordsTab[] = fgetcsv($rfile,1000);
        }
        fclose($rfile);
        return $wordsTab;
    }

    public static function printCSVarray(Array $wordstab)
    {
        $arraycsv=echo($wordstab);
        return Sarraycsv;
    }
   }

   $samplefile='SampleCSV.csv';
