<function name="LoadSlashers" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Includes every slasher file in `slashco/slasher/*.lua`, causing them to call <page>SlashCo.RegisterSlasher</page>.<br>
		Called once automatically when the file is loaded, and again whenever the addon content changes.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
</function>
