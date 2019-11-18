<?php

//Zet hier de de H1 php voor dagen online anders werkt javascript ni

echo "

<html>
    <head>
        <link href=\"../vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"MainCss.css\" rel=\"stylesheet\">
        <link href=\"testIndex.css\" rel=\"stylesheet\" type=\"text/css\">
        <title>Daily Gifts</title>
        <script>
        
         function checkDay() {
             
             alert('zad');
           
             var daysonline = parseInt(document.getElementById('daysonline').innerHTML);
     
             
             switch (daysonline) {
                 
                 case 1:
                     takeDocumentID(1);                                      
             }
                         
         }
         
         function takeDocumentID(dagID) {
             
             dagID = 'dag' + dagID;
             
             var ereturn = document.getElementById('dag1');
             return ereturn;
         }
        
        </script>
        
        <style>
        
        #gifts{
            margin-left: auto;
            margin-right: auto;
            border: 2px red solid;
            width: 50%;
        }
        
        td{
            border: 1px greenyellow solid;
            border-spacing: 0px;
            padding: 0px;
            font-size: 20px;
        }
        
        .giftPic{
            
            height: 100px;
            width: 10%;
        }
        
</style>
        
    </head>
    <body onload='checkDay()'>
        
        <h1>Daily Gifts</h1>
        
        <table id='gifts'>
        
        <tr>
            <td class='giftPic'>Week 1: </td>
            <td class='giftPic' id='dag1'>Gift 1</td>
            <td class='giftPic' id='dag2'></td>
            <td class='giftPic' id='dag3'>Gift 2</td>
            <td class='giftPic' id='dag4'></td>
            <td class='giftPic' id='dag5'>Gift 3</td>
            <td class='giftPic' id='dag6'></td>
            <td class='giftPic' id='dag7'>Gift 4</td>
        </tr>
        
        <tr class='giftDagen'>
            <td class='giftDagen' >Days: </td>
            <td class='giftDagen' >Monday</td>
            <td class='giftDagen' >Tuesday</td>
            <td class='giftDagen' >Wednesday</td>
            <td class='giftDagen' >Thursday</td>
            <td class='giftDagen' >Friday</td>
            <td class='giftDagen' >Saturday</td>
            <td class='giftDagen' >Sunday</td>
        </tr>
        
        <tr>
            <td class='giftPic'>Week 2: </td>
            <td class='giftPic' id='dag8'>Gift 1</td>
            <td class='giftPic' id='dag9'></td>
            <td class='giftPic' id='dag10'>Gift 2</td>
            <td class='giftPic' id='dag11'></td>
            <td class='giftPic' id='dag12'>Gift 3</td>
            <td class='giftPic' id='dag13'></td>
            <td class='giftPic' id='dag14'>Gift 4</td>
        </tr>
        
        <tr class='giftDagen'>
            <td class='giftDagen'>Days: </td>
            <td class='giftDagen'>Monday</td>
            <td class='giftDagen'>Tuesday</td>
            <td class='giftDagen'>Wednesday</td>
            <td class='giftDagen'>Thursday</td>
            <td class='giftDagen'>Friday</td>
            <td class='giftDagen'>Saturday</td>
            <td class='giftDagen'>Sunday</td>
        </tr>
        
        <tr>
            <td class='giftPic'>Week 3: </td>
            <td class='giftPic' id='dag15'>Gift 1</td>
            <td class='giftPic' id='dag16'></td>
            <td class='giftPic' id='dag17'>Gift 2</td>
            <td class='giftPic' id='dag18'></td>
            <td class='giftPic' id='dag19'>Gift 3</td>
            <td class='giftPic' id='dag20'></td>
            <td class='giftPic' id='dag21'>Gift 4</td>
        </tr>
        
        <tr class='giftDagen'>
            <td class='giftDagen'>Days: </td>
            <td class='giftDagen'>Monday</td>
            <td class='giftDagen'>Tuesday</td>
            <td class='giftDagen'>Wednesday</td>
            <td class='giftDagen'>Thursday</td>
            <td class='giftDagen'>Friday</td>
            <td class='giftDagen'>Saturday</td>
            <td class='giftDagen'>Sunday</td>
        </tr>                       
        </table>        
        
        <h1 id='daysonline'>1</h1>

    </body> 
</html>




";