<?php include 'include/header.php' ?>

<div class="myForm"> 

<form action="forms.php" method="POST">
    <select name="countries">
        <option selected="selected">Choose one Country</option>
        
        <?php
        //importing the array 
        require_once 'requires/db.php';
        
        // loop for dropdown list
        foreach($capital as $country => $city){
			echo "<option value=$city '>$country</option>";
		}

        ?>  
    </select>

    <input type="submit" name="Submit" value="Submit">
</form>

<?php 
    //result -- selecting the country and capital
    if(isset($_POST['Submit'])){

		$getcapital = $_POST['countries']; 
		echo 'The capital of the slected country is ' . $getcapital;	
	}
	
?>
</div> 
    
<?php include 'include/footer.php' ?>