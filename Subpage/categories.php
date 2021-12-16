
<?php
$a='select * FROM  categories ';
$objStatament=$objPDO->prepare($a);
$objStatament->execute();
$dta=$objStatament->fetchALL(PDO::FETCH_OBJ);
?>
<div class=" rsidebar span_1_of_left">
						<h4 class="cate">Categories</h4>
							 <ul class="cute">
							  <?php 
                              foreach($dta as $c)
                              {
                                  ?>
                                  <li class="subitem1"><a href="product.php?idCategories=<?php echo $c->idCategories ?>"><?php echo $c->nameCategories ?> </a>
                                    
							      </li>

                                  <?php
                              }
                              ?>
							
						</ul>
					</div>