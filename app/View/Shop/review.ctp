<?php echo $this->set('title_for_layout', 'Order Review'); ?>

<?php $this->Html->addCrumb('Order Review'); ?>

<?php echo $this->Html->script(array('shop_review.js'), array('inline' => false)); ?>

<style type="text/css">
	#ccbox {
		background: transparent url("<?php echo $this->webroot; ?>img/cards.png");
		margin: 0 0 10px 0;
		padding: 0 0 0 150px;
		width: 0;
		height: 23px;
		overflow: hidden;
	}
</style>

<h1>Order Review</h1>

<hr>

<div class="row">
	<div class="col col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Customer Info</h3>
			</div>
			<div class="panel-body">
				First Name: <?php echo $shop['Order']['first_name'];?><br />
				Last Name: <?php echo $shop['Order']['last_name'];?><br />
				Email: <?php echo $shop['Order']['email'];?><br />
			</div>
		</div>
	</div>
	<div class="col col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Billing Address</h3>
			</div>
			<div class="panel-body">
				Billing Address: <?php echo $shop['Order']['billing_address'];?><br />
				Billing Address 2: <?php echo $shop['Order']['billing_address2'];?><br />
				Billing City: <?php echo $shop['Order']['billing_city'];?><br />
				Billing State: <?php echo $shop['Order']['billing_state'];?><br />
				Billing Zip: <?php echo $shop['Order']['billing_zip'];?><br />
				Billing Country: <?php echo $shop['Order']['billing_country'];?>
			</div>
		</div>
	</div>
	<div class="col col-sm-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Shipping Address</h3>
			</div>
			<div class="panel-body">
				Shipping Address: <?php echo $shop['Order']['shipping_address'];?><br />
				Shipping Address 2: <?php echo $shop['Order']['shipping_address2'];?><br />
				Shipping City: <?php echo $shop['Order']['shipping_city'];?><br />
				Shipping State: <?php echo $shop['Order']['shipping_state'];?><br />
				Shipping Zip: <?php echo $shop['Order']['shipping_zip'];?><br />
				Shipping Country: <?php echo $shop['Order']['shipping_country'];?>
			</div>
		</div>
	</div>
</div>


<hr>

<div class="row">
	<div class="col col-sm-10">Products: <?php echo $shop['Order']['order_item_count']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">Items: <?php echo $shop['Order']['quantity']; ?></div>
	<div class="col col-sm-1" style="text-align: right;">Total<br /><strong>$<?php echo $shop['Order']['total']; ?></strong></div>
</div>

<hr>

<br />
<br />

<?php echo $this->Form->create('Order'); ?>

<?php if($shop['Order']['order_type'] == 'creditcard'): ?>

<div id="ccbox">
	Credit Card Type.
</div>

<div class="row">
	<div class="col col-sm-3">
		<?php echo $this->Form->input('creditcard_number', array('class' => 'form-control ccinput', 'maxLength' => 16, 'autocomplete' => 'off')); ?>
	</div>
</div>

<br />

<div class="row">
	<div class="col col-sm-2">
		<?php echo $this->Form->input('creditcard_month', array(
			'label' => 'Expiration Month',
			'class' => 'form-control',
			'options' => array(
				'01' => '01 - January',
				'02' => '02 - February',
				'03' => '03 - March',
				'04' => '04 - April',
				'05' => '05 - May',
				'06' => '06 - June',
				'07' => '07 - July',
				'08' => '08 - August',
				'09' => '09 - September',
				'10' => '10 - October',
				'11' => '11 - November',
				'12' => '12 - December'
			)
		)); ?>
	</div>
	<div class="col col-sm-2">
		<?php echo $this->Form->input('creditcard_year', array(
			'label' => 'Expiration Year',
			'class' => 'form-control',
			'options' => array(
				'13' => '2013',
				'14' => '2014',
				'15' => '2015',
				'16' => '2016',
				'17' => '2017',
				'18' => '2018',
				'19' => '2019',
				'20' => '2020',
				'21' => '2021',
				'22' => '2022',
			)
		));?>
	</div>
</div>

<br />

<div class="row">
	<div class="col col-sm-2">
		<?php echo $this->Form->input('creditcard_code', array('label' => 'Card Security Code', 'class' => 'form-control', 'maxLength' => 4)); ?>
	</div>
</div>

<br />

<?php endif; ?>

<?php echo $this->Form->button('Submit Order', array('class' => 'btn btn-primary', 'ecape' => false)); ?>

<?php echo $this->Form->end(); ?>

<br />
<br />

