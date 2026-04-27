<!-- page template of list_user page. -->

        <!-- title of the page.  -->
        <h2>Users</h2>
        <!-- table in the page. -->
        <table cellspacing="30">
        <!-- heading of the table. -->
    	<thead>
            <!-- title of teh heading column. -->
    	    <th>S.N.</th><th>Username</th><th>Action</th>
        <!-- heading completed.  -->
    	</thead>	
    	<!-- body of the table started. -->
        <?php $sn = '1'; foreach ($select_query as $get_query):?>
        <tr id="delete<?php echo $get_query['user_id']?>">
    	<td><?php echo $sn++;?></td>
    	<td><?php echo $get_query['username'];?></td>
        <!-- adding action button for delete. -->
    	<td><button id="delete" class="btn btn-danger" onClick="userDelete(<?php echo $get_query['user_id']?>)">Delete</button></td>
        </tr>	
        <!-- data fetching from database table completed. -->
        <?php endforeach;?>
        <!-- table completed.  -->
        </table>
