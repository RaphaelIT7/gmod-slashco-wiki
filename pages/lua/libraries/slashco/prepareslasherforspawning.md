<function name="PrepareSlasherForSpawning" parent="SlashCo" type="libraryfunc">
	<description>
		<internal></internal>
		Schedules the slasher to spawn after a delay based on the round difficulty, if the gamemode is `SlashCo.Gamemode.ESCAPE`.<br>
		The delay is the smallest value between the difficulty-based delay and any slasher's <page>SLASHER#SpawnDelay</page> value.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
</function>
