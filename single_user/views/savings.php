<?php include "../controllers/savings_controller.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savings</title>
</head>
<body>
    
<form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="savings name">Savings Name: </label>
                </td>
                <td>
                    <input type="text" name="savings_name"/>
                </td>
                <td>
                    <?php echo $expense_nameError;?>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="expense amount">Savings Amount: </label>
                </td>

                <td>
                    <input type="text" name="savings_amount" />
                </td>
                <td>
                    <?php echo $savings_amountError;?>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="savings_type">Savings Type: </label>
                </td>

                <td>
                    <select name="savings_type" id="">
                        <option selected value=""></option>
                        <option value="food">Food</option>
                        <option value="health">Health</option>
                        <option value="travel">Travel</option>
                        <option value="education">Education</option>
                        <option value="others">Others</option>

                    </select>
                </td>

                <td>
                    <?php echo $savings_typeError;?>
                </td>
            </tr>


            <tr>
                
                <td>
                    <button type="submit" name="Submit">Add Savings</button>
                </td>
            </tr>
           
        </table>
    </form>


    <?php 
        echo "<table>";
        if ($result->num_rows > 0){
            echo "<th>ID</th> <th>Savings Name</th> <th>Savings Amount</th> <th>Savings Type</th>";

            

            foreach($result as $rows){
                echo "<tr>";

                echo "<td>". $rows['id'] ."</td>";
                echo "<td>". $rows['savings_name'] ."</td>";
                echo "<td>". $rows['savings_amount'] ."</td>";
                echo "<td>". $rows['savings_type'] ."</td>";
                echo "<td> <a href=".'../views/editSavings.php?savingsId='.$rows['id'].">Edit<a></td>";
                echo "<td><a href=".'../views/savings.php?savingsId='.$rows['id'] .">Delete</a></td>";
                echo "</tr>";
            }
        }
        echo "</table>";

    
    ?>

    
        <tr>
            <td></td>
        </tr>
    



</body>
</html>