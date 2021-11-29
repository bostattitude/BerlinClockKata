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

}