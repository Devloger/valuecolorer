<?php

namespace Devloger\ValueColorer;

class ValueColorer
{
    public static function getBg($colorValue)
    {
        switch ($colorValue)
        {
            case 1:
                $colorClass = 'bg-info text-white outline-black';
                break;
            case 2:
                $colorClass = 'bg-primary text-white outline-black';
                break;
            case 3:
                $colorClass = 'bg-danger text-white outline-black';
                break;
            default:
                $colorClass = '';
                break;
        }
        return $colorClass;
    }
    
    public static function getShadow($colorValue)
    {
        switch ($colorValue)
        {
            case 1:
                $colorClass = 'shadow1';
                break;
            case 2:
                $colorClass = 'shadow2';
                break;
            case 3:
                $colorClass = 'shadow3';
                break;
            default:
                $colorClass = '';
                break;
        }
        return $colorClass;
    }
    
}