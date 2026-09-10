<function name="EndRound" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Ends the current round, shows the round-over screen to all players, awards round points and win statistics, and calls the <page>SlashCo:EndRound</page> hook.<br>
		After a short delay it removes the round entities, resets the round data and moves the server back to the lobby via <page>SlashCo.GoToLobby</page>.<br>
		Does nothing if <page>g_SlashCoDebug</page> is set or if the round has already been ended.
	</description>
	<realm>Server</realm>
	<group>Round</group>
</function>
