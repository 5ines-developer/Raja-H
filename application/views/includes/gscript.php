<!-- tag manager -->
<?php 

$seod = $this->ci->project->seo_default();
echo (!empty($seod->g_analytics))?$seod->g_analytics:'';
echo (!empty($seod->g_tag))?$seod->g_tag:'';
 ?>
