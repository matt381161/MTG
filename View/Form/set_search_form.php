<div class="row">
	<div class="col-xs-12 col-md-8">
		<form method="POST" action="/set_search.php">
			<label for="sel1">系列:</label>
				<?php
					require('View\select.php')
				?>
				<br>
			<label>編號:</label>
				<input type="number" name="number" required>
				<button type="Submit" class="btn btn-primary">送出</button>
		</form>
	</div>
</div>