<function name="ForceNewSlasherSelection" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Forces a new Slasher to be picked for the current round, used once the <page>SlashCo.SetupExpectedPlayersFailsafe</page> timer runs out because not everyone connected in time.<br>
		If a Slasher is already stored in the database the round is force-started instead, otherwise the connected players are asked whether they want to become the Slasher.<br>
		Aborts the round if fewer than 2 players are connected.
	</description>
	<realm>Server</realm>
	<group>Round</group>
</function>
