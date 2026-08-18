<function name="StartRound" parent="SlashCo" type="libraryfunc">
	<description>
		Starts the current round.<br>
		Prepares the round entities and players, disables soundscapes, fades players out, and begins the main round initialization after a short delay.<br>
		Does nothing when the game is currently in the lobby.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="noSetup" type="boolean" default="false">If true, skips <page>SlashCo.SetupPlayers</page></arg>
	</args>
</function>