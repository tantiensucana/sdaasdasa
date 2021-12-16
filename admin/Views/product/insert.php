<?php
$dataType=$product->getType();
$dataBrand=$product->getBrand();
$dataCategories=$product->getCategories();
$dataDiscount=$product->getDiscount();
?>

<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
					<table class="table">
						
						<tbody>
							<tr>
								<td scope="row"> ID :</td>
								<td><input type="text" name="id"></td>
								
							</tr>
							<tr>
								<td scope="row">Name :</td>
								<td><input type="text" name="name"></td>
							
							</tr>
							<tr>
								<td>price old : </td>
								<td><input type="number" name="priceold"></td>
							</tr>
                            <tr>
								<td>price new : </td>
								<td><input type="number" name="pricenew"></td>
							</tr>
							<tr>
								<td>Image :</td>
								<td><input type="file" name="img"></td>
							</tr>
							
							<tr>
								<td>Type</td>
								<td>
								<select name="idType" id="">
										<?php 
										foreach($dataType as $r)
										{
											?>
											<option value="<?php echo $r['idType'] ?>"><?php echo $r['nameType'] ?></option>
											<?php
										}
										?>
								</select>
								</td>
							</tr>
							<tr>
								<td>Categories : </td>
								<td>
								<select name="idCategories" id="">
										<?php 
												foreach($dataCategories as $r)
												{
													?>
													<option value="<?php echo $r['idCategories'] ?>"><?php echo $r['nameCategories'] ?></option>
													<?php
												}
												?>
							</select>
								</td>
							</tr>
                            <tr>
								<td>Brand : </td>
								<td>
								<select name="idBrand" id="">
										<?php 
												foreach($dataBrand as $r)
												{
													?>
													<option value="<?php echo $r['idBrand'] ?>"><?php echo $r['nameBrand'] ?></option>
													<?php
												}
												?>
							</select>
								</td>
							</tr>
                            <tr>
								<td>Discount : </td>
								<td>
								<select name="idDiscount" id="">
										<?php 
												foreach($dataDiscount as $r)
												{
													?>
													<option value="<?php echo $r['idDiscount'] ?>"><?php echo $r['nameDiscount'] ?></option>
													<?php
												}
												?>
							</select>
								</td>
							</tr>

						</tbody>
					</table>





					<input type="submit" value="Insert">

				</form>