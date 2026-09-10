<function name="LoadCurRoundData" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Loads the Difficulty, Offering, Survivor and Slasher data that was saved by the lobby into <page>SlashCo.CurRound</page>, and builds the list of expected players for the round.<br>
		Assigns the loaded Slashers via <page>SlashCo.SelectSlasher</page> and, if the Nightmare offering is active, turns every Survivor into a Slasher instead.<br>
		Falls back to <page>SlashCo.SinglePlayerSetup</page> in singleplayer, or calls <page>SlashCo.EndRound</page> if the saved data could not be found.
	</description>
	<realm>Server</realm>
	<group>Round</group>
</function>
