<!-- page template for list_category page. -->

        <!-- title of the page. -->
        <h2>List Category</h2>
        <!-- table in the page. -->
        <table cellspacing="30">
    	<!-- heading of the table started. -->
    	<thead>
            <!-- all header title. -->
    	    <th>S.N.</th><th>Name</th><th>Action</th>
        <!-- heading ended. -->
    	</thead>	
    	 <!-- body of the table. -->
        <?php $sn = '1'; foreach ($select_query as $get_query):?>
        <tr id="delete<?php echo $get_query['id']?>">
    	<td><?php echo $sn++;?></td>
    	<td><?php echo $get_query['name'];?></td>
        <!-- edit button in the table. -->
    	<td><a onClick="javascript: return confirm('Please confirm Action');" href="add_category?edit=<?php echo $get_query['id']?>">Edit</a>
            <!-- delete button in the table.-->
    	    <button id="delete" class="btn btn-danger" onClick="categoryDelete(<?php echo $get_query['id']?>)">Delete</button>
        </tr>
        <!-- fetching all data from database table completed.  -->
        <?php endforeach;?> 	
        <!-- table completed. -->
        </table>


