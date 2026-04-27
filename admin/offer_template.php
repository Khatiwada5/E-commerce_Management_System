<!-- page template to show offers page in website -->

		<!-- form in the page. -->
		<form  action="add_offer" method="POST" style="margin-left: -20%;">
			<!-- input button to add new offers. -->
			<input type="submit" name="submit1" value="Add New Offer/Updates">
		<!--  form completed  -->
		</form>
		<!-- multiple line break. -->
		<br><br><br><br><br>

<!-- displaying all offers presents. -->
		<h3>Current Offers</h3>
		<!-- table of the offer. -->
		<table>
			<!-- table head -->
		<thead>
			<!-- title of the headings. -->
    	    <th>S.N.</th><th>Name</th><th>Action</th>
    	<!-- table head completed.  -->
    	</thead>	
    	
    	<!-- body of the table. -->
        <?php $sn = '1'; foreach ($select_query as $get_query):?>
        <tr id="delete<?php echo $get_query['id']?>">
    	<td><?php echo $sn++;?></td>
    	<td><?php echo $get_query['o_name'];?></td>
    	<!-- action button to remove offer. -->
    	 <td>
    	 	 <!-- edit button in the table. -->
    	 	<a onClick="javascript: return confirm('Please confirm Action');" href="add_offer?edit=<?php echo $get_query['id']?>">Edit</a>

			<!-- delete button in the table.-->
    	 	<button id="delete" class="btn btn-danger" onClick="deleteOffer(<?php echo $get_query['id']?>)">Delete</button></td>
        </tr>
        <!-- fetching data completed.  -->
        <?php endforeach;?>
        <!-- table completed. -->
		</table>
