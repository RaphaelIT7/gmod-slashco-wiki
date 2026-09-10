<function name="SpawnPlayerAsSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Used for debugging: forces a player to become and spawn as the given slasher immediately.<br>
		If the round hasn't started spawning slashers yet, the player is instead just marked to spawn as that slasher via <page>SlashCo.SelectSlasher</page>.<br>
		The slasher name is matched case-insensitively against both the registered name and the slasher's `Name` field.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="ply" type="Player">The player to turn into a slasher</arg>
		<arg name="slasherName" type="string">The name of the slasher to spawn as</arg>
	</args>
</function>
