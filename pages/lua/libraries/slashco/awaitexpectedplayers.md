<function name="AwaitExpectedPlayers" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Checks whether every player expected for the current round (loaded via <page>SlashCo.LoadCurRoundData</page>) is connected.<br>
		Once all expected players are present it either starts a new Slasher selection or starts the round, depending on whether a Slasher still needs to be picked.<br>
		Does nothing while in the lobby, while less than 2 players are expected, or once <page>SlashCo.CurRound</page>.AntiLoopSpawn is set.
	</description>
	<realm>Server</realm>
	<group>Round</group>
</function>
