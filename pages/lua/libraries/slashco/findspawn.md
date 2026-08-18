<function name="FindSpawn" parent="SlashCo" type="libraryfunc">
	<description>
		Finds a suitable spawn point for a player based on their team.<br>
		Survivors and spectators use survivor spawn entities, slashers use slasher spawn entities, and players in the lobby use `info_player_start` entities.<br>
		If all spawn points are occupied, the oldest previously used spawn point is selected.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="ply" type="Player">Player to find a spawn point for</arg>
	</args>
	<rets>
		<ret name="spawnEnt" type="Entity">Selected spawn entity or `nil` if no suitable spawn exists</ret>
	</rets>
</function>