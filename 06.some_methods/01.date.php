<?php 
/**
 * date(format,timestamp)
 * 
 * d - day of month
 * m - month of year
 * Y - represents a year in four digit (in four digits)
 * l - represents the day of the week
 * H - hour 24 format
 * h - hour 12 format with leading zeros
 * i - minutes with leading zeros
 * s - secound with leading zeros
 * a - lowercase ante merdiem and post meridiem (am or pm)
 * 
 */

echo "Date : ".date("> Y-m-d (l) <")."\n";
echo "TIME : ".date("H:i:s")."\n";
echo "TIME(12) : ".date("h-i-s-a")."\n";

/**
 * date_default_timezone_set("Bangladesh/Dhaka");
 * This function use for set time zone.
 * 
 */

?>