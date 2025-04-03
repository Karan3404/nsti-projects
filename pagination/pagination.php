<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <center>
    <?php 
   $at=[
    array (1,"soma","csa","kolkata"),
    array(2,"puja","dmc","howrah"),
    array(3,"kobita","RAc","bihar"),
    array(4,"pinki","fitter","jharkhand"),
    array(5,"shusma","csa","up"),
    array(6,"frima","dmc","howrah"),
    array(7,"rashi","welder","mp"),
    array(8,"rimi","roda","howrah"),
    array(9,"manju","welder","howrah"),
 ];

    $records=isset($_GET['records'])?$_GET['records']:1;
    $ppage=5;
    $tp=ceil(count($at)/$ppage); 
    $s=($records-1) * $ppage;
$std=array_slice($at,$s,$ppage);

    ?>
    <table border="20">
        <tr >
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>mobile</th>
        </tr>
    <?php
    foreach ($std as $s):
    ?>
    <tr align="middle" >
    <td><?php echo $s[0] ?></td>
    <td><?php echo $s[1] ?></td>
    <td><?php echo $s[2] ?></td>
    <td><?php echo $s[3] ?></td>
</tr>
<?php endforeach; ?>
</table>
    </center>
   
    <div>
    <?php 
          for($i=1; $i <= $tp;$i++):
    ?>
    <?php 
          if ($i==$records):?>
          <strong>
            <?php
             echo $i;
             ?>
             </strong>
             <?php
             else:
             ?>
             <a href="?records=<?php echo $i ?>">
             <?php echo $i;?></a>
             <?php
             endif;
             ?>
             <?php
             endfor;
             ?>
             </div>
                  
</body>
</html>