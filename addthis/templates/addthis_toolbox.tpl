<div class="addthis">
	<script type="text/javascript">
		var addthis_config = {"data_track_clickback":<?php echo $this->trackback; ?><?php if($this->setlanguage=="1"): ?> , ui_language: "<?php echo $this->language; ?>"<?php endif; ?>};
	</script>
	<div class="addthis_toolbox addthis_default_style">
		<?php foreach($this->services as $service): ?>
			<a class="addthis_button_<?php echo $service['service']; ?>"></a>
		<?php endforeach; ?>
		<span class="addthis_separator">|</span>
		<a href="http://addthis.com/bookmark.php?v=<?php echo $this->version; ?>&username=<?php echo $this->username; ?>" class="addthis_button_expanded">Mehr</a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/<?php echo $this->version; ?>/addthis_widget.js#username=<?php echo $this->username; ?>"></script>
</div>