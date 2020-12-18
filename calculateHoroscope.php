<?php
function splitNumbers($month_and_day){
    $month = $month_and_day[0] . $month_and_day[1];
    $day = $month_and_day[2] . $month_and_day[3];
    $star = whichHoroscope(intval($month), intval($day));
    return $star;
} 
function whichHoroscope($month, $day){
    if($month < 2 && $month > 0 && $day > 18 && $day < 32 || $month < 3 && $month > 1 && $day < 19 && $day > 0) {
        return "Aquarius";
    } else if($month < 3 && $month > 1 && $day > 19 && $day < 29 || $month < 4 && $month > 2 && $day < 21 && $day > 0) {
        return "Pisces";
    } else if($month < 4 && $month > 2 && $day < 31 && $day > 20 || $month < 5 && $month > 3 && $day < 20 && $day > 0) {
        return "Aries";
    } else if($month < 5 && $month > 3 && $day < 31 && $day > 19 || $month < 6 && $month > 4 && $day < 22 && $day > 0) {
        return "Taurus";
    } else if($month < 6 && $month > 4 && $day < 32 && $day > 21 || $month < 7 && $month > 5 && $day < 22 && $day > 0) {
        return "Gemini";
    } else if($month < 7 && $month > 5 && $day < 31 && $day > 21 || $month < 8 && $month > 6 && $day < 23 && $day > 0) {
        return "Cancer";
    } else if($month < 8 && $month > 6 && $day < 32 && $day > 22 || $month < 9 && $month > 7 && $day < 23 && $day > 0) {
        return "Leo";
    } else if($month < 9 && $month > 7 && $day < 32 && $day > 22 || $month < 10 && $month > 8 && $day < 23 && $day > 0) {
        return "Virgo";
    } else if($month < 10 && $month > 8 && $day < 31 && $day > 22 || $month < 11 && $month > 9 && $day < 23 && $day > 0) {
        return "Libra";
    } else if($month < 11 && $month > 9 && $day < 32 && $day > 22 || $month < 12 && $month > 10 && $day < 23 && $day > 0) {
        return "Scorpio";
    } else if($month < 12 && $month > 10 && $day < 31 && $day > 22 || $month < 13 && $month > 11 && $day < 22 && $day > 0) {
        return "Sagittarius";
    } else if($month < 13 && $month > 11 && $day < 32 && $day > 21 || $month < 2 && $month > 0 && $day < 20 && $day > 0) {
        return "Capricornus";
    } else {
        return "error";
    }
}
?>