<function name="SlashCo:RegisterAddons" parent="" type="hook">
	<description>
		Called at the end of <page>SlashCo.FindSlashCoAddons</page>, after it already auto-detected every mounted addon that contains a `lua/slashco` folder.<br>
		Addons that need to register themselves despite not matching that check can use this hook to call <page>SlashCo.RegisterAddon</page> with their own workshop ID.
	</description>
	<realm>Shared</realm>
</function>