<?php

/**
 * Phobos Framework
 *
 * Para la información completa acerca del copyright y la licencia,
 * por favor vea el archivo LICENSE que va distribuido con el código fuente.
 *
 * @author      Marcel Rojas <marcelrojas16@gmail.com>
 * @copyright   Copyright (c) 2012-2017, Marcel Rojas <marcelrojas16@gmail.com>
 */

namespace MongooseStudio\MngGeo;

/**
 * Class MngGeo
 *
 * Geo Utils
 * @package MongooseStudio\MngGeo
 */
class MngGeo {

    /**
     * Convertir tiempo de latitudes y longitudes a decimal
     * @param int $deg
     * @param int $min
     * @param double $sec
     * @return double
     */
    public static function time2Dec($deg, $min, $sec) {
        return $deg + ((($min * 60) + ($sec)) / 3600);
    }

    /**
     * Convertir decimales de latitudes y longitudes a tiempo
     * @param double $dec
     * @return \stdClass
     */
    public static function dec2Time($dec) {
        $vars = explode(".", $dec);
        $deg = doubleval($vars[0]);
        $tempma = "0." . $vars[1];

        $tempma = $tempma * 3600;
        $min = floor($tempma / 60);
        $sec = $tempma - ($min * 60);

        return (object)["deg" => $deg, "min" => $min, "sec" => $sec, "dec" => $dec];
    }
}