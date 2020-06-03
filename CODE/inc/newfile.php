<label >Select Category:</label>
					<select class="input-field" name="category">
						<option disabled selected value> Select Category</option>
						<?php
							include_once "connection.php";
							$sql1 = mysqli_query($conn,"select * from category;");
							if(!$sql1)
							{
								echo "Error".mysqli_error($sql);
							}
							else
							{
								while($row = mysqli_fetch_assoc($sql1))
								{
									$cid=$row['cid'];
								$cname=$row['cname'];
								echo '<option value="'.$cid.'">'.$cname.'</option>';	
}
}
?>
</select>