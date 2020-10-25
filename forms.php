<?php include 'include/header.php' ?>
<div class="myForm"> 

<form action="forms.php" method="POST">
    <select name="countries">
        <option selected="selected">Choose one Country</option>
        
        <?php
        //importing the array 
        require_once 'requires/db.php';
        
        // loop for dropdown list
        foreach($capital as $country => $country_value){
            echo "<option value=$country_value '>$country</option>";
        }
        ?>  
    </select>

    <input type="submit" name="Submit" value="Submit">
</form>

<?php 
    //result -- selecting the country and capital
    if(isset($_POST['Submit'])){

        $getcapital = $_POST['countries']; 
        $getcountry = $_POST['selected'];
        echo 'The capital of ' . $getcountry . ' is ' . $getcapital;
    }
?>
</div> 
    
<?php include 'include/footer.php' ?>