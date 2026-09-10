<function name="ResetLobby" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Resets the lobby back to its initial state: clears all lobby timers, resets <page>SlashCo.LobbyData</page>, cleans up the map, and moves any player still on the Survivor or Slasher team back to the lobby team.<br>
		Used when a prepared game is interrupted, for example when players leave before the round could start.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
</function>
