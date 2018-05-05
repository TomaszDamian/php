<?php require 'partials/header.view.php'; ?>
	<div class="Blog">	
		<div class="w-2/3 mt-6 rounded overflow-hidden shadow-lg WhiteBackGround">
			<form action="/PostCreate" method="POST">
				<div class="px-6 py-4">
					<div class="font-bold text-xl mb-2">
						<input type="text" class="border" placeholder="Title" name="title">
					</div>
					<p class="text-grey-darker text-base mb-2">
						<textarea class="border w-full h-32" placeholder="Body text" name="body"></textarea>
					</p>
					<h6 class="ownerText">
						<input type="text" class="border" placeholder="Author" name="owner">
					</h6>
				</div>
				<button type="submit">Submit your post!</button>
			</form>
		</div>
	</div>
<?php require 'partials/footer.view.php'; ?>