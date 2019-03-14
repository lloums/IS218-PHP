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
    public static function BuildnFill($wordstab)
    {
        $html = '<table>';
        $html .= '<tr>';
        foreach($wordstab[0] as $key=>$value)
        {
            $html .= '<th>' . htmlspecialchars($key) . '</th>';

        }
        foreach( $wordstab as $key=>$value){
            $html .= '<tr>';
            foreach($value as $key2=>$value2){
                $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            }
            $html .= '</tr>';
        }

        // finish table and return it

        $html .= '</table>';
        return $html;
    }
    final class whatevs()
    {
      $samplefile='SampleCSV.csv';
      csv:ReadCSV($samplefile);
    }

   }


