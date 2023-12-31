<?php
require_once "include/login.inc.php";
RequireAdmin();

$hash = "registrator";
$count = DbQuery("SELECT COUNT(*) FROM {$DB_PREFIX}registrators");
?>

<div id="actions">
	<h1><?php echo M_REGS_TXT; ?></h1>
	<a href="#registrator/edit" class="addLink" onclick="return loadcontent('registrator/edit')"><?php echo ADD_TXT; ?></a>
</div>

<div id="filters">
	<a href="#" class="active" onclick="return addStateFilter('', this)"><?php echo ALL_TXT; ?></a>
	(<span class="allCountTxt">0</span>)&nbsp;
	<a href="#" onclick="return addStateFilter('inactive', this)"><?php echo INACTIVE_TXT; ?></a>
	(<span class="blockedCountTxt">0</span>)
</div>

<?php
include "default_lister.php";
?>


<script type="text/javascript">
function resetStateFilters(){
	$('#filters a.active').removeClass('active');
	$('#filters a:contains("<?php echo ALL_TXT; ?>")').addClass('active');
}

function addStateFilter(sf, sender){
	$('#filters a.active').removeClass('active');
	$(sender).addClass('active');
	
	cur_url = cur_url.replace(/state=[^&\/]*&/i, '');
	full_hash = full_hash.replace(/(\/\?)?(&)?state=[^&\/]*/i, '');
	if (sf != '')
	{
		cur_url += 'state=' + sf + '&';
		if (full_hash.indexOf('/?') != -1)
			full_hash += '&state=' + sf;
		else
			full_hash += '/?' + 'state=' + sf;
	}	
		
	updatelist(1);	
	return false;
}

var m = location.hash.match(/(^#.*state=([^&\/]*))/);
if (m)
{
    full_hash = m[1];
    cur_url += 'state=' + m[2] + '&';
	$('#filters a.active').removeClass('active');
	$('#filters a[onclick*="addStateFilter(\'' + m[2] + '\'"]').addClass('active');
}
</script>
