<function name="LobbyRoundSetup" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Begins the transition out of the lobby once enough players are ready.<br>
		Advances the lobby to <page>SlashCo.LobbyData</page>.LOBBYSTATE 1, opens the elevator shutter doors, forces any not-ready player into the Survivor ready state, resets the Slasher/Survivor selection info, and then runs the difficulty, Offering and team assignment logic that picks the Slashers and Survivors for the upcoming round.
	</description>
	<realm>Server</realm>
	<group>Lobby</group>
</function>
