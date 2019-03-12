<?php
/**
 * Created by PhpStorm.
 * User: lloum
 * Date: 3/11/2019
 * Time: 9:01 PM
 */


class MidtermProject
{
    public $samplefile = SampleCVS . cvs;

    public function ReadCSV(samplefile)
{
    $rfile = fopen(samplefile, "r");
    $wordsTab = fgetcsv($rfile);
    fclose($file);
    return wordTab;
}


    public function CSVtoT
    {

    }


   }