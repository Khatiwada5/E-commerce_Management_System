
    <h2>Furnitures</h2>
    <!-- table in the page. -->
    <table cellspacing="30">
    	<!-- table header. -->
    	<thead>
            <!-- header title. -->
    	   <th>S.N.</th><th>Name</th><th>Image</th><th>Price</th><th>Condition</th><th>Action</th>
        <!-- header of table completed. -->
    	</thead>	
    	 <!-- body of the table started.  -->
        <?php $sn = '1'; foreach ($select_query as $get_query):?>
        <?php $a = explode(',',$get_query['image_name']);?>

        <tr id="delete<?php echo $get_query['id']?>">
    	<td><?php echo $sn++;?></td>
    	<td><?php echo $get_query['name'];?></td>
        <!-- adding images if image exists. -->
        <td><?php if (file_exists('../images/furniture/' . $a[0])):?>
        <!-- hyperlinking image to provide full page display of the image. -->
        <a href="../images/furniture/<?php echo $a[0]?>"><img style="width: 100px;height: 100px" src="../images/furniture/<?php echo $a[0]?>" /></a></td>
        <!-- ending the if condition. -->
         <?php endif;?>
         <!-- displaying other data of the futniture present in database. -->
    	<td><?php echo $get_query['price'];?></td>
    	<td><?php echo $get_query['f_condition'];?></td>
        <!-- adding action buttons  -->
        <!-- action button for edit. -->
    	<td><a onClick="javascript: return confirm('Please confirm Action');" href="add_furniture?edit=<?php echo $get_query['id']?>">Edit</a>
            <!-- action button for hide/show. -->
    		<a onClick="javascript: return confirm('Please confirm Action');" href="list_furniture?hide=<?php echo $get_query['id']?>&status=<?php echo $get_query['seen_status']?>"><?php if($get_query['seen_status']=='Y') echo "Hide"; else echo "Show"?></a>
            <!-- action button for delete. -->
    	   <button id="delete" class="btn btn-danger" onClick="userFurniture(<?php echo $get_query['id']?>)">Delete</button></td>
        </tr>	
        <!-- fecthing of data completed. -->
        <?php endforeach;?> 
        <!-- table completed.  -->
        </table>
