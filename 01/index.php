<!DOCTYPE html>

<html>
    <head>
        <title>Loops EX</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                padding: 10px;
            }
            table{
                width: 500px;
                border-collapse: collapse;
            }
            table tr td , table tr th{
                border: solid 1px silver;
                padding: 5px;
                text-align: left;
            }
            table tr th{
                background: #666;
                color: #fff;
                
            }
            table tr:nth-child(2n){
                background: #e4e4e4;
            }
            table tr td span.green{
                color: green;
                font-weight: bold;
            }
            table tr td span.red{
                color: red;
                font-weight: bold;
            }
            table tr:hover{
                background: yellow;
            }
        </style>
    </head>
    <body>
        <?php
        $class1=array( 
            array('ahmed yasser',50,50,50),
            array('ateia nour',45,50,49),
            array('abdou',50,48,45),
            array('bal3at',50,50,50)
            
            );
                 $class2=array( 
            array('tefa',50,50,50),
            array('ramzy',45,50,49),
            array('omar',50,48,45),
            array('manso',50,50,50)
            
            );
                 $school=array($class1,$class2);
                 
        ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Arabic</th>
                <th>English</th>
                <th>Math</th>
                <th>Total</th>
                <th>percentage</th>
                <th>Status</th>
            </tr>
            
        </table>
    </body>
</html>
