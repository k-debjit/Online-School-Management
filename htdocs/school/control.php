<?php
session_start();
include_once("a_header.php");
?>
<table align="center">
                    <tr> 
                    <td><a href="add_student.php"><h1 style="border-bottom:dotted">Add New Student</h1></a></td>
                   </tr>
                    <tr> 
                    <td><a href="control_oldstudent.php"><h1 style="border-bottom:dotted">Update Student Info</h1></a></td>
                   </tr>
                    <tr> 
                    <td><a href="add_teacher.php"><h1 style="border-bottom:dotted">Add New Teacher</h1></a></td>
                   </tr> 
                   <tr> 
                    <td><a href="control_oldteacher.php"><h1 style="border-bottom:dotted">Update Teacher Info</h1></a></td>
                   </tr>
                                      <tr> 
                    <td><a href="subject1.php"><h1 style="border-bottom:dotted">Update Subjectlist</h1></a></td>
                   </tr>
                                                               <tr> 
                    <td><a href="distribute.php"><h1 style="border-bottom:dotted">Teacher's Class & Subject</h1></a></td>
                   </tr>
                                <tr> 
                    <td><a href="routine.php"><h1 style="border-bottom:dotted">Update Routine</h1></a></td>
                   </tr>
                   <tr> 
                    <td><a href="control_news.php"><h1 style="border-bottom:dotted">Update News & Event</h1></a></td>
                   </tr>

                   
</table>
<?php
include_once("footer2.php");
?>