<?php $name = "XYZ"; 
$marks = [40, 30, 45, 48, 34]; 
$maxMarksEach = 50;
 $totalMax = $maxMarksEach * count($marks);
  $totalObt = array_sum($marks); 
   $percentage = ($totalObt / $totalMax) * 100; 
    if($percentage >= 75){
         $result = "With Distinction";
          }elseif($percentage >= 33){
             $result = "Passed"; 
             }else{ 
                $result = "Failed"; } 
                ?> 
                <h2>Name : <?= $name ?></h2>
                 <table border="1" cellpadding="8" 
                 cellspacing="0" 
                 style="border-collapse:collapse; 
                 text-align:center;">
                  <tr>
                     <th>Subject Name</th> 
                     <th>Max Marks</th> 
                     <th>Obtained Marks</th> 
                    </tr> 
                    <?php
                     for($i=0; $i<count($marks); $i++){
                         echo "<tr>
                          <td>Sub".($i+1)."</td> 
                          <td>$maxMarksEach</td> 
                          <td>".$marks[$i]."</td>
                           </tr>";
                            } 
                            ?>
                             <tr>
                                 <td><b>Total</b></td>
                                  <td><?= $totalMax ?></td>
                                   <td><?= $totalObt ?></td> 
                                </tr>
                                 <tr>
                                     <td><b>Percentage</b></td> 
                                     <td colspan="2"><?= 
                                     round($percentage,1)?>%</td>
                                     </tr>
                                     <tr>
                                         <td><b>Result</b></td> 
                                     <td colspan="2"><?= $result ?></td>
                        </tr>
                        </table>
