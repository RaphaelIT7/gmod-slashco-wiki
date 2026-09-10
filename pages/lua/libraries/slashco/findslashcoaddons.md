<function name="FindSlashCoAddons" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Rebuilds the list of registered SlashCo workshop addons by scanning every mounted addon for a `lua/slashco` folder, as well as legacy addons placed in the local `addons/` folder.<br>
		Also detects the main gamemode's own workshop ID and mount state. Runs the <page>SlashCo:RegisterAddons</page> hook at the end, so other addons can register themselves manually via <page>SlashCo.RegisterAddon</page>.<br>
		Called automatically on load and whenever <page>SlashCo.GameContentChanged</page> runs.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
</function>