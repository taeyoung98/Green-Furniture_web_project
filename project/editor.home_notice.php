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

$sql = "SELECT * FROM notice ORDER BY seq DESC LIMIT 4";
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
                        <td class="notice">{$row['seq']}</td>
                        <td class="notice">{$row['title']}</td>
                        <td class="notice">{$row['userid']}</td>
                        <td class="notice">{$row['reg_date']}</td>
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
$(document).on('click', '#include2 .table .notice' , function(){
    var seq = $(this).parent().find(':eq(0)').text();
    $.get('/project/4/text_form.notice.php',{
        seq: seq
    }).done(function(data){
        if($.trim(data)){
            //$('#pocket').html(data);
            location.href = '/project/4/text_form.notice.php?seq='+seq; 
           // $('#exampleModal').modal('show');    
        }
    });
}); 
</script>
