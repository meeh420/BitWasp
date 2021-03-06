        <div class="span9 mainContent" id="item_view">
          <h2>Items<?php if(isset($category)) echo ' Category: '.$category['name']; ?></h2>
          <?php if(isset($returnMessage)) echo '<div class="alert">' . $returnMessage . '</div>'; ?>
          
          <?php if(count($items) > 0) { ?>

		  <div class='row-fluid'>

<?php foreach ($items as $item): ?>
            <div class="span3 well well-small" id="prod_<?php echo $item['hash']; ?>" >
                <div class="itemImg">
                  <?php echo anchor('item/'.$item['hash'], "<img src='data:image/jpeg;base64,{$item['main_image']['encoded']}' title='{$item['name']}' width='200'>"); ?>
                </div>

                <div class="caption">
                  <?php echo anchor('item/'.$item['hash'], $item['name']);?>
                  <div class="price">Price: <span class="priceValue"><?php echo $item['price_f'];?></div>
                  <div class="vendor"><?php echo anchor('user/'.$item['vendor']['user_hash'],$item['vendor']['user_name']); ?></div>
                  <!--<div class="rating">item Rating: <?php echo $item['rating'];?>/5</div>-->
                </div>
	        </div>
	        
<?php endforeach; ?>
          </div>
<?php } ?>
        </div>

