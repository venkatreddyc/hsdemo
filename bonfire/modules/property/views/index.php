<div>
	<h1 class="page-header">property - Home Index</h1>
</div>

<br />

<?php if (isset($records) && is_array($records) && count($records)) : ?>
				
	<table class="table table-striped table-bordered">
		<thead>
		
			
		<th>username</th>
		<th>address</th>
		<th>location</th>
		<th>info</th>
		<th>file</th>
		
		</thead>
		<tbody>
		
		<?php foreach ($records as $record) : ?>
			<?php $record = (array)$record;?>
			<tr>
			<?php foreach($record as $field => $value) : ?>
				
				<?php if ($field != 'pid') : ?>
					<td><?php echo ($field == 'deleted') ? (($value > 0) ? lang('property_true') : lang('property_false')) : $value; ?></td>
				<?php endif; ?>
				
			<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<?php endif; ?>