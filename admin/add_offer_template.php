<!-- page template for add_offer page -->


    <!-- title of the page. -->
       <h2>Add Offer</h2>
       
       <!-- form for offer addition -->
       <form action="add_offer" method="POST">
        <input type="hidden" name="id" value="<?php if(isset($data['id'])) echo $data['id'];?>"> <!-- input for id and hidden -->
        <!-- label for Offer name and it's input. -->
           <label> Offer/Update Name</label><input type="text" name="name" value="<?php if(isset($data['o_name'])) echo $data['o_name'];?>" required>
           <!-- label for Add product and it's input. -->
           <label>Add Product</label>
           <!-- dropdown for products. -->
           <select name="product">
            <!-- displaying all products in dropdown list. -->
            <?php foreach($find_query as $get_query):?>
              <?php if($data['product_id'] == $get_query['id']):?>
               <option value="<?php echo $get_query['id']?>" selected><?php echo $get_query['name']?></option>
               <?php else:?>
              <!-- displaying regular category. -->
              <option value="<?php echo $get_query['id'];?>"><?php echo $get_query['name'];?></option>
              <!-- closing if statement. -->
             <?php endif;?>
           <?php endforeach;?>
           <!-- ending the dropdown list. -->
           </select>
           <!-- label for discount and its input. -->
           <label>Discount</label><input type="text" name="discount" value="<?php if(isset($data['discount'])) echo $data['discount'];?>">
           <!-- submit button of the form. -->
          <label>Update Information</label><textarea name="o_update"><?php if(isset($data['o_update'])) echo $data['o_update'];?></textarea>
           <!-- submit button of the form. -->
           <input type="submit" name="submit" value="ADD" style="margin-left: 22%;">
           <!-- form completed. -->
       </form> 
         
