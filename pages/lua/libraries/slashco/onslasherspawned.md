<function name="OnSlasherSpawned" parent="SlashCo" type="libraryfunc">
	<description>
		Initializes a slasher's internal state right after they spawn: resets their chase/kill timers, applies <page>Slasher#OnBalanceForPlayers</page> to their <page>Slasher</page> table, sets their prowl speed and anger, and calls the slasher's <page>Slasher#OnSpawn</page> function via <page>SlasherFunction</page>.
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="ply" type="Player">The slasher that was spawned</arg>
	</args>
</function>
