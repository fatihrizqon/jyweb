<?php echo validation_errors(); ?>
<?php echo form_open('#'); ?>
<div class="mdl-grid">
  <div class="mui-select">
    <select>
      <option>Option 1</option>
      <option>Option 2</option>
      <option>Option 3</option>
      <option>Option 4</option>
    </select>
    <br>
    <div class="mui-textfield">
      <input name="order_weight" type="number" placeholder="">
    </div>
    <div class="mui-textfield">
      <input name="cust_name" type="text" placeholder="">
    </div>
    <div class="mui-textfield">
      <textarea name="cust_address" type="text" placeholder=""></textarea>
    </div>
    <div class="mui-textfield">
      <input name="cust_contact" type="text" placeholder="">
    </div>
    <input class="mui-btn mui-flat-btn" type="submit" name="submit" value="Create a New Order" />
</div>
</form>
