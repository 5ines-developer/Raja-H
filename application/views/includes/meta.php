<title><?php echo (!empty($seo->title))?$seo->title:'' ?> | Raja Housing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo (!empty($seo->m_desc))?$seo->m_desc:'' ?>">
<meta name="keywords" content="<?php echo (!empty($seo->keywords))?$seo->keywords:'' ?>">
<!-- schema -->
<script type="application/ld+json">
	<?php echo (!empty($seo->schema))?$seo->schema:'' ?>
</script>