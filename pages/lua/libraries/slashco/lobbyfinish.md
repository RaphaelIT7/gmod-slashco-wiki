<function name="LobbyFinish" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Marks the lobby as finished (<page>SlashCo.LobbyData</page>.LOBBYSTATE 4) and starts the helicopter take-off sequence that leads into the round intro.<br>
		Moves the helicopter target position further away over time and, after 15 seconds, plays the game intro, starts the leave timer and disables the lobby background music.<br>
		Does nothing if the lobby has already finished.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
</function>
