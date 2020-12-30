<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM all_question ORDER BY seq DESC LIMIT 6";
$result = $conn->query($sql);

?>
<style>
.table tr:hover{
    cursor: pointer;
    color: gray;
}
</style>

       
        <table class="table">
         
            <tbody>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo <<< BBS
                    <tr>
                        <td>{$row['seq']}</td>
                        <td>{$row['title']}</td>
                        <td>{$row['userid']}</td>
                        <td>{$row['reg_date']}</td>
                    </tr>
BBS;
                }
            } else {
                echo <<< NOBBS
                작성된 글이 없습니다.
NOBBS;
            }
            $conn->close();
        ?>
            </tbody>
        </table>
<div id="pocket"></div>

<script>

$(document).on('click', '#include .table td', function(){
    var seq = $(this).parent().find(':eq(0)').text();
    $.get('text_form.all_question.php',{
        seq: seq
    }).done(function(data){
        if($.trim(data)){
            //$('#pocket').html(data);
            location.href = 'text_form.all_question.php?seq='+seq; 
           // $('#exampleModal').modal('show');    
        }
    });
}); 
</script>
