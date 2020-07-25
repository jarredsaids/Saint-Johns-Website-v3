<!-- Birthday pop-up container -->
<div class = "container">
<div class = "alert alert-dismissible fade show" role="alert" style="width: 95%;
margin: 10px auto; max-width: 960px;">
        <?PHP
        //*****Code that populates the Birthday Table****
        $file = resource_path('/files/SJ_Birthdays.csv');
        //Load next 6 birthdays and put into table
        $birthday_array = array();
        $bday_file = fopen($file, "r");
        $i = 0;

        while (($line = fgetcsv($bday_file)) !== FALSE) {
            $birthday_array[$i] = $line;
            $i++;
        }

        $size = count($birthday_array);

        //puts beginning 4 birthdays at end of the array too to ease the loop process
        $birthday_array[$i] = $birthday_array[0];
        $birthday_array[$i + 1] = $birthday_array[1];
        $birthday_array[$i + 2] = $birthday_array[2];
        $birthday_array[$i + 3] = $birthday_array[3];

        $j = 0;
        $found = 0;
        $t_date = new DateTime('now');
        $todays_date = $t_date->format('M d');
        $todays_month = $t_date->format('M');
        $todays_day = (int)$t_date->format('d');

        $display_array = array();

        switch ($todays_month) {
            case "Jan":
                $bmonth = "January";
                break;
            case "Feb":
                $bmonth = "February";
                break;
            case "Mar":
                $bmonth = "March";
                break;
            case "April":
                $bmonth = "April";
                break;
            case "May":
                $bmonth = "May";
                break;
            case "Jun":
                $bmonth = "June";
                break;
            case "Jul":
                $bmonth = "July";
                break;
            case "Aug":
                $bmonth = "August";
                break;
            case "Sep":
                $bmonth = "September";
                break;
            case "Oct":
                $bmonth = "October";
                break;
            case "Nov":
                $bmonth = "November";
                break;
            case "Dec":
                $bmonth = "December";
                break;
            default:
                echo "something went wrong..." . $todays_month . "<br>";
        }
        $i = -1;
        $bdmonth = "";
        while ($bmonth != $bdmonth) {
            $i++;
            $split = explode(" ", $birthday_array[$i][0]);
            $bdmonth = $split[0];
        }
        //$i--;
        $bdday = 0;

        while ($todays_day > $bdday) {
            $i++;
            $split = explode(" ", $birthday_array[$i][0]);
            $bdday = (int)$split[1];
        }

        $j = 0;
        while ($j < 4) {
            $display_array[$j] = $birthday_array[$i + $j];
            $j++;
        }

        echo '	<table id="bday-table" style="width: 100%;">
			<strong><header class = "bday-header" style="text-align: center;">Upcoming Birthdays</header></strong>
				<tr>
				<td class="bday-date">' . $display_array[0][0] . '</td>
				<td class="bday-name">' . $display_array[0][1] . '</td>
				<td class="bday-date">' . $display_array[1][0] . '</td>
				<td class="bday-name">' . $display_array[1][1] . '</td>

			</tr>
			<tr>
				<td class="bday-date">' . $display_array[2][0] . '</td>
				<td class="bday-name">' . $display_array[2][1] . '</td>
				<td class="bday-date">' . $display_array[3][0] . '</td>
				<td class="bday-name">' . $display_array[3][1] . '</td>
			</tr>
		</table>';

        ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
</div>
<a id="bday-style"></a>
