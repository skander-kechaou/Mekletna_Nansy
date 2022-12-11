<?PHP

include '../Model/Views/basket.php';
include '../Controller/basketC.php';

$error="";
$basket=null;
$basketC= new basketC();

if (
    isset($_POST["nameOrder"]) &&
    isset($_POST["idOrder"]) &&
    isset($_POST["priceOrder"]) &&

    isset($_POST["dateOrder"])


) {
    if (
        !empty($_POST["nameOrder"]) &&
        !empty($_POST["idOrder"]) &&
        !empty($_POST["priceOrder"]) &&
      
        !empty($_POST["dateOrder"])


    ) {
        $basket = new Basket(
            $_POST["nameOrder"],
            $_POST["idOrder"],
            $_POST["priceOrder"],
            new DateTime($_POST["dateOrder"])
          
        );
        $basketC->addBasket($basket);
        header('Location:listBasket.php');
    } else
        $error = "Missing information";
}




// if (isset($_GET['add']))
// {
            
//     $basket= new basket(
    
//         $_GET['nameOrder'],
//         $_GET['idOrder'],
//         $_GET['priceOrder'],
//         $_GET['dateOrder'],
//         $_GET['statusOrder']
     
//         );
//     $basketC->addBasket($basket);
    
//     header('Location: listBasket.php');

// }

?>

<HTML>
    <head>
    </head>

    <body>
    <h1>add basket</h1>
    <form action="addBasket.php" method="POST">
        <table>
          

            <tr>
                <td>Name order</td>
                <td><input type="text" name="nameOrder" id="nameOrder"></td>
            </tr>
            <tr>
                <td>id order</td>
                <td><input type="number" name="idOrder" id="idOrder"></td>
            </tr>
           

            <tr>
                <td>Price Order</td>
                <td><input type="number" name="priceOrder" id="priceOrder"></td>
            </tr>

            <tr>
                <td>Date of order</td>
                <td><input type="date" name="dateOrder" id="dateOrder"></td>
            </tr>

           

          
            <tr>
                <td>    </td>
                <td><input type="submit" name="add" value="add"></td>
            </tr>
        </table>
    </form>
    </body>
</HTML>
