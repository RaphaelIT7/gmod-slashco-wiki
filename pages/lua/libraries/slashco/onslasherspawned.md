<function name="OnSlasherSpawned" parent="SlashCo" type="libraryfunc">
	<description>
		Initializes a slasher's internal state right after they spawn: resets their chase/kill timers, applies <page>SLASHER#OnBalanceForPlayers</page> to their <page>SLASHER</page> table, sets their prowl speed and anger, and calls the slasher's <page>SLASHER#OnSpawn</page> function via <page>Player:SlasherFunction</page>.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="ply" type="Player">The slasher that was spawned</arg>
	</args>
</function>
