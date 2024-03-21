<?php 
    include "../controllers/expenses_controller.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="expense name">Expense Name: </label>
                </td>
                <td>
                    <input type="text" name="expense_name"/>
                </td>
                <td>
                    <?php echo $expense_nameError;?>
                </td>
            </tr>

            

            <tr>
                <td>
                    <label for="expense amount">Expense Amount: </label>
                </td>

                <td>
                    <input type="text" name="expense_amount" />
                </td>
                <td>
                    <?php echo $expense_amountError;?>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="expense_type">Expense Type: </label>
                </td>

                <td>
                    <select name="expense_type" id="">
                        <option selected value=""></option>
                        <option value="food">Food</option>
                        <option value="health">Health</option>
                        <option value="travel">Travel</option>
                        <option value="education">Education</option>
                        <option value="others">Others</option>

                    </select>
                </td>

                <td>
                    <?php echo $expense_typeError;?>
                </td>
            </tr>


            <tr>
                
                <td>
                    <button type="submit" name="Submit">Add Expense</button>
                </td>
            </tr>
           
        </table>
    </form>



    <?php 

    echo "<h3>All Expenses</h3>";

    if ($allExpenseResult->num_rows > 0){
        
        {
            echo "<table>";

            echo "<th>ID</th> <th>Expense Name</th> <th>Expense Amount</th> <th>Expense Type</th>";
            foreach($allExpenseResult as $rows){

            echo "<tr>";
            echo "<td>". $rows["id"] ."</td>";
            echo "<td>". $rows["expense_name"]. "</td>";
            echo "<td>". $rows["expense_amount"]. "</td>";
            echo "<td>". $rows["expense_type"]. "</td>";

            echo "<td><a href=". '../views/deleteExpense.php?expenseId='.$rows['id'] .">Delete</a></td>";
            echo "</tr>";

            }
            echo "</table>";

        }

        }
    ?>
    
</body>
</html>