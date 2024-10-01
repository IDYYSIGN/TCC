
<!-- 
// if(isset($_GET["numero"]) && !empty(trim($_GET["numero"]))){
//     // Include config file
//     require_once "crud.php";
    
   
//     $sql = "SELECT * FROM tbprodutos WHERE numero = ?";
    
//     if($stmt = mysqli_prepare($link, $sql)){
        
//         mysqli_stmt_bind_param($stmt, "i", $param_numero);
        
//         $param_numero = trim($_GET["numero"]);
        
        
//         if(mysqli_stmt_execute($stmt)){
//             $result = mysqli_stmt_get_result($stmt);
    
//             if(mysqli_num_rows($result) == 1){
            
//                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
               
//                 $descricao = $row["descricao"];
//                 $categoria = $row["categoria"];
//                 $preco = $row["preco"];
//             } else{
            
//                 header("location: error.php");
//                 exit();
//             }
            
//         } else{
//             echo "Oops! Something went wrong. Please try again later.";
//         }
//     }
     
    
//     mysqli_stmt_close($stmt);
    
    
//     mysqli_close($link);
// } else{
    
//     header("location: error.php");
//     exit();
// }
//  -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/cardapio.css">
    <title>cardapio</title>
    
    
</head>
<body>

<div id="produtos">
    <div id="imgproduto">
        <img src="src/images/logo.png" alt="">
    </div>
        <div id="nomeproduto">
            nome produto
        </div>
            <div id="precoproduto">
                10R$
            </div>
    <div id="qtde">
        <button class="btn-cardapio">+</button> 5 <button class="btn-cardapio">-</button>
    </div>
</div>
    

</body>
</html>