<?PHP

include '../Model/basket.php';
include '../Controller/basketC.php';

$error="";
$basket=null;
$basketC= new basketC();

if (isset($_GET['add']))
{
            
    $basket= new basket(
        $_GET['idProduct'],
        $_GET['nameOrder'],
        $_GET['idClient'],
        $_GET['priceOrder'],
        $_GET['dateOrder'],
        $_GET['idOrder'],
        $_GET['statusOrder'],
        $_GET['idBasket']
        );
    $basketC->addBasket($basket);
    
    header('Location: listBasket.php');

}

?>

<HTML>
    <head>
    </head>

    <body>
    <h1>add basket</h1>
    <form>
        <table>
            <tr>
                <td>id Product</td>
                <td><input type="number" name="idProduct" id="idProduct"></td>
            </tr>

            <tr>
                <td>Name order</td>
                <td><input type="text" name="nameOrder" id="nameOrder"></td>
            </tr>

            <tr>
                <td>id Client</td>
                <td><input type="number" name="idClient" id="idClient"></td>
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
                <td>id order</td>
                <td><input type="number" name="idOrder" id="idOrder"></td>
            </tr>

            <tr>
                <td>status </td>
                <td><input type="number" name="statusOrder" id="statusOrder"></td>
            </tr>

            <!-- <tr>
                <td>id of Basket</td>
                <td><input type="number" name="idBasket" id="idBasket"></td>
            </tr> -->

            <tr>
                <td>    </td>
                <td><input type="submit" name="add" value="add"></td>
            </tr>
        </table>
    </form>
    </body>
</HTML>
