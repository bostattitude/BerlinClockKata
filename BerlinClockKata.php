<?php

namespace BerlinClockKata;

class BerlinClockKata
{
    public function simpleMinutes(int $minutes): string
    {

        $minutes = $minutes % 5;
        $reponse = "";
        for ($i = 1; $i <= 4; $i++) {
            if ($i <= $minutes) {
                $reponse .= "Y";
            } else if ($i > $minutes) {
                $reponse .= "O";
            }
        }
        return $reponse;
    }

    public function per5minutes(int $minutes): string
    {
        $block5minutes = $minutes / 5;
        $reponse = "";
        for ($i = 1; $i <= 11; $i++) {
            if ($i % 3 == 0 && $i <= $block5minutes) {
                $reponse .= "R";
            } else if ($i <= $block5minutes) {
                $reponse .= "Y";
            } else if ($i > $block5minutes) {
                $reponse .= "O";
            }
        }
        return $reponse;
    }

    public function simpleHours(int $hours): string
    {
        $hours = $hours % 5;
        $reponse = "";
        for ($i = 1; $i <= 4; $i++) {
            if ($i <= $hours) {
                $reponse .= "R";
            } else if ($i > $hours) {
                $reponse .= "O";
            }
        }
        return $reponse;
    }

    public function per5hours(int $hours): string
    {
        $block5Hours = $hours / 5;
        $reponse = "";
        for ($i = 1; $i <= 4; $i++) {
            if ($i <= $block5Hours) {
                $reponse .= "R";
            } else if ($i > $block5Hours) {
                $reponse .= "O";
            }
        }
        return $reponse;
    }

    public function simpleSecondes(int $seconds): string
    {
        if ($seconds % 2 == 0) {
            return "R";
        } else {
            return "O";
        }
    }



}