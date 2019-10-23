<title><?php echo (!empty($seo->title))?$seo->title:'' ?> | Raja Housing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php echo (!empty($seo->m_desc))?$seo->m_desc:'' ?>">
<meta name="keywords" content="<?php echo (!empty($seo->keywords))?$seo->keywords:'' ?>">
<meta property="fb:pages" content="<?php echo (!empty($seo->og_id))?$seo->og_id:'' ?>" />
<meta property="og:image" content="<?php echo (!empty($seo->og_image))?$seo->og_image:'' ?>" />
<meta property="og:title" content="<?php echo (!empty($seo->og_title))?$seo->og_title:'' ?>">
<meta property="og:site_name" content="<?php echo (!empty($seo->og_site))?$seo->og_site:'' ?>">
<meta property="og:url" content="<?php echo (!empty($seo->og_url))?$seo->og_url:'' ?>">
<meta property="og:description" content="<?php echo (!empty($seo->og_desc))?$seo->og_desc:'' ?>">
<meta property="og:type" content="<?php echo (!empty($seo->og_type))?$seo->og_type:'' ?>">
<meta name="twitter:card" content="<?php echo (!empty($seo->t_card))?$seo->t_card:'' ?>">
<meta name="twitter:site" content="<?php echo (!empty($seo->t_site))?$seo->t_site:'' ?>">
<meta name="twitter:image" content="<?php echo (!empty($seo->t_image))?$seo->t_image:'' ?>">
<meta name="twitter:url" content="<?php echo (!empty($seo->t_url))?$seo->t_url:'' ?>">
<meta name="twitter:title" content="<?php echo (!empty($seo->t_title))?$seo->t_title:'' ?>">
<meta name="twitter:description" content="<?php echo (!empty($seo->t_desc))?$seo->t_desc:'' ?>">
<!-- schema -->
<script type="application/ld+json">
	<?php echo (!empty($seo->schema))?$seo->schema:'' ?>
</script>