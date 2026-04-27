<!-- page template for complete_enquiry page. -->

        <!-- title for the page.  -->
        <h2>Completed Enquiries</h2>
        <!-- table in the page. -->
		 <table cellspacing="30">
            <!-- head of the table. -->
    	    <thead>
                <!-- heading of the table. -->
    	        <th>S.N.</th><th>Enquiry Detail</th><th>Client Name</th><th>Completed By</th>
                <!-- header completed. -->
    	</thead>	
    	 
         <!-- content of the table. -->
         <!-- fetching data from database table. -->
        <?php $sn = '1'; foreach ($select_query as $get_query):?>
        <tr>
    	   <td><?php echo $sn++;?></td>
    	   <td><?php echo $get_query['enquiry'];?></td>
    	   <td><?php echo $get_query['name'];?></td>
    	   <td><?php echo $get_query['user']?></td>
        </tr>	
    <?php endforeach;?>
    <!-- data fetching complated. -->
    </table>
