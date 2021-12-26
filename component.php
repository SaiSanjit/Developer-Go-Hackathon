<?php
?>
<html>
    <body>
        <div style="width:2500px;height:2000px;border-radius:20%;;position:absolute;top: 50%;transform:translate(-50%,-50%);background:rgb(255,255,225,0.9);">
</div>

</body>
</html> 
  <?php
function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                         <img src=\"$productimg\" alt=\"Image1\" class=\"img-fluid card-img-top\" style=\" width:120px;\" >
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Python for learning
                            </p>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Subscribe <i class=\"fas fa-book\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
           <a href=tkinter.pdf  >                     <img src=$productimg alt=\"Image1\" class=\"img-fluid\"></a>
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                 <h6>click on the image to access</h6>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
</div>
                        </div>
                    </div>
                </form>
     ";
     
    echo  $element;
}



function cartlement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=access&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                            <a href=book3.pdf >      <img src=$productimg alt=\"Image1\" class=\"img-fluid\"></a>
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                    
                               
                                <button type=\"submit\" class=\"btn btn-success mx-2\" name=\"access\">access </button>
                            </div>
                        </div>
                    </div>
                </form>
     ";
     
    echo  $element;
}



?>
