<function name="DrawTheSlasherSelectorBox" parent="" type="libraryfunc">
	<description>
		<internal></internal>
		Builds and shows the slasher selection frame used to pick a slasher in the lobby, flashing the game window to notify the player.<br>
		Slashers not matching the allowed class/danger level, or that are in `bannedSlashers`, are shown disabled.<br>
		Called when the `SlashCo:PickingSlasher` net message is received from the server.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="pickSlasherTbl" type="table" optional>Table with `slasherClass`, `slasherDanger` and `bannedSlashers` fields restricting which slashers can be picked</arg>
	</args>
</function>
