<?php  

   $string = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, minima. Deserunt repellendus asperiores quam magnam perferendis, excepturi et officia vitae nihil iusto maiores velit doloremque aut corrupti vel porro accusantium.';

   $censored = "****";

   $censoreThis = $_GET["censure"];

?>

<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   

   <div> lunghezza stringa: <?php echo strlen($string) ?></div>
   <p><?php echo str_replace($censoreThis, $censored, $string) ?></p>

   <form action="">
      <input name="censure" type="text" placeholder="metti una parola da censurare">
      <button type="submit">Submit</button>
   </form>  
</body>
</html>