<form method="post">
	<?php if(!empty($errors)): ?>
		<ul>
			<?php foreach($errors as $error): ?>
				<li><?= $error ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
	<div>
		<label>Title:
			<input name="title" id="title" placeholder="Article Title"
			value="<?= htmlspecialchars($title); ?>">
		</label>
	</div>

	<div>
		<label>Content:
			<textarea name="content" rows="4" cols="40"
			id="content" placeholder="Article Content"><?= htmlspecialchars($content); ?></textarea>
		</label>
	</div>

	<div>
		<label>Publication Date:
			<input type="text" name="published_at" id="published_at"
			value="<?= htmlspecialchars($published_at) ?>">
		</label>
	</div>

	<button>Submit</button>
</form>
<a href="index.php">Return to Index</a>
