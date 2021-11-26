<?php
class article_toolbar extends Plugin
{

	private $host;

	private $plugindir = "plugins.local/article_toolbar/";

	function about()
	{
		return array(
			2.0,
			"Toolbar for easy access to feed functions",
			"foorschtbar", false
		);
	}

	function init($host)
	{
		$host->add_hook($host::HOOK_MAIN_TOOLBAR_BUTTON, $this);
	}

	function hook_main_toolbar_button()
	{
?>

		<button dojoType="dijit.form.Button" title="" onclick="Feeds.reloadCurrent()" style="order: 30">
			<i class="material-icons" title="Refresh Feed">refresh</i>
		</button>
		<button dojoType="dijit.form.Button" title="" onclick="Headlines.move('prev', true);" style="order: 30">
			<i class="material-icons" title="Previous Post">arrow_upward</i>
		</button>
		<button dojoType="dijit.form.Button" title="" onclick="Headlines.move('next', true);" style="order: 30">
			<i class="material-icons" title="Next Post">arrow_downward</i>
		</button>

<?php
	}
	function api_version()
	{
		return 2;
	}
}
