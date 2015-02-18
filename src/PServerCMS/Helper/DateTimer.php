<?php

namespace PServerCMS\Helper;

/**
 * Class DateTimer
 * @package PServerCMS\Helper
 */
class DateTimer
{
    /**
     * @param $timestamp
     *
     * @return \DateTime
     */
    public static function getDateTime4TimeStamp( $timestamp )
    {
        $dateTime = new \DateTime();
        $dateTime->setTimestamp( $timestamp );
        return $dateTime;
    }

    /**
     * @param $timestamp
     *
     * @return int
     */
    public static function getZeroTimeStamp( $timestamp )
    {
        return strtotime( date( 'Y-m-d', $timestamp ) );
    }
} 