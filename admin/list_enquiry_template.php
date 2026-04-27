<!-- page template for list_enquiry page. -->


        <!-- title of the page. -->
        <h2>Enquiries</h2>
        <!-- table in the page. -->
		<table cellspacing="30">
        <!-- table header.  -->
    	<thead>
            <!-- table headign titles. -->
    	   <th>S.N.</th><th>Enquiry Detail</th><th>Client Name</th><th>Remarks</th>
        <!-- header completed.  -->
    	</thead>	
    	 <!-- body of the table started. -->
        <?php $sn = '1'; foreach ($select_query as $get_query):?>
        <tr id="delete<?php echo $get_query['id']?>">
    	<td><?php echo $sn++;?></td>
    	<td><?php echo $get_query['enquiry'];?></td>
    	<td><?php echo $get_query['name'];?></td>
        <!-- adding a completion button. -->
    	<td><button id="delete" class="btn btn-danger" onClick="completeEnquiries(<?php echo $get_query['id']?>)">Complete</button></td>
        </tr>	
        <!-- fetching body of the table completed. -->
        <?php endforeach;?>
        <!-- table completed. -->
        </table>
