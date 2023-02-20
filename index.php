<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GradeAverage</title>
    <style>
        body{
            font-family:Arial, Helvetica, sans-serif;
            align-items: center;
            text-align: center;
            background-color: lightslategrey;
        }
        h1{
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        table,td,th{
            border-collapse: collapse;
            margin: auto;
        }
        table{
            width: 100%;
           line-height: 40px;
        }
        input{
            border: none;
            background-color: transparent;
            font-size: 18px;
           text-align: center;
        }
        .ave{
            font-weight: bold;  
        }
        .remarks{
            text-align: right;
            font-size: 18px;
            font-style: italic;
            padding-right: 5px;
            margin: auto;
        }
        .btn{
            border-radius: 10px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 18px;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .btn:hover{
            cursor: pointer;
        }
        .container{
            background-color:aquamarine;
            width: 50%;
            margin: auto;
            min-width: 300px;
            border-radius: 10px;
        }
        
    </style>
</head>
<body>

<h1>Assignment: PHP Program</h1>
    
    <div class="container">
    
        <?php 
            $prog1 = $_GET["prog1"];
            $ds = $_GET["ds"];
            $oop = $_GET["oop"];
           
            if(isset($_GET['submit']))
                {
                
                if ($prog1=="" || $ds=="" || $oop=="" )
                    {
                        echo "Complete the input!";               
                    }
                
                else
                    {
                        $sum = round(($prog1 + $ds + $oop)/3,2);
                        $rem = "Passed";
                        if($sum >= 75){
                            $rem = "You Passed";
                        }  
                        else{
                            $rem = "You Failed";
                        }
                    }                         
                }
         
        ?>

        <form action="GradeAverage.php" method="get">
            <table border="1" >
                <tr >
                    <th >Subjects</th>
                    <th>Grades</th>
                </tr>
                <tr>
                    <td>Programming 1</td>
                    <td><input type="number" size="7" name="prog1" value="89"></td>
                </tr>
                <tr>
                    <td>Data Structure</td>
                    <td><input type="number" size="7" name="ds" value="80"></td>
                </tr>
                <tr>
                    <td>Object Oriented Programming</td>
                    <td><input type="number" size="7" name="oop" value="83"></td>
                </tr>
                <tr>
                    <td class="ave" >Average:</td>
                    <td>
                         <input type="text" size="7" disabled class="ave" value="<?php echo $sum ?>">; 
                    </td>
                </tr>

            </table>
             <p class="remarks" id="rem"><?php echo $rem?></p>
            <button type="submit" class="btn" name="submit">Compute!</button>  
        </form>   
    </div>

    <p style="margin-top: 100px; font-size:18px;">Developed By Mary Ann Caracas Docdocan</p>
</body>
</html>