<function name="SlashCo:EndRound" parent="" type="hook">
	<description>
		Called by <page>SlashCo.EndRound</page> once the round-over screen and round point/stat updates have been processed, right before the server waits to return everyone to the lobby.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="winners" type="table">A table indexed by the SteamID64 of each Survivor that was rescued by the helicopter, each set to `true`</arg>
	</args>
</function>
