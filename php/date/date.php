<?php
// Get the current date and time in the default format (Year-Month-Day Hour:Minute:Second)
$currentDateTime = date('Y-m-d H:i:s');
echo "Current Date and Time (default format): $currentDateTime<br>";

// Get the current date in a different format (Full Month Name Day, Year)
$currentDate = date('F j, Y');
echo "Current Date (custom format): $currentDate<br>";

// Get the current time in a different format (Hour:Minute AM/PM)
$currentTime = date('h:i A');
echo "Current Time (custom format): $currentTime<br>";

// Get the day of the week for the current date (Full Day Name)
$currentDayOfWeek = date('l');
echo "Day of the Week: $currentDayOfWeek<br>";

// Get the current month as a numerical value (1 to 12)
$currentMonthNumeric = date('n');
echo "Current Month (numeric): $currentMonthNumeric<br>";

// Get the current month as a three-letter abbreviation (e.g., Jan, Feb, Mar)
$currentMonthAbbreviation = date('M');
echo "Current Month (abbreviation): $currentMonthAbbreviation<br>";

// Get the current year (Four-digit year)
$currentYear = date('Y');
echo "Current Year: $currentYear<br>";
?>
