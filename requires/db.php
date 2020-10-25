<?PHP 
  
      $capital = array("Italy"=>"Rome", "Luxemburg"=>"Luxemburg", "Belguim" =>"Brussels", "Denmark"=>"Copenaghen", 
                     "Finland"=>"Helsinki", "France"=>"Paris","Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
                     "Germany"=>"Berlin", "Greece"=>"Athens","Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", 
                     "Portugal" =>"Lisbon","Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
                     "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius","Czech Republic"=>"Prague", "Estonia"=>"Tallin",
                     "Hungary"=>"Budapest","Latvia"=>"Riga", "Malta"=>"Valetta","Austria"=>"Vienna", "Poland"=>"Warsaw");

      //go to each value of the array
      
   foreach($capital as $x => $x_value) {
         echo "<tr><td>$x</td><td>$x_value</td></tr>";

      }
   ?>