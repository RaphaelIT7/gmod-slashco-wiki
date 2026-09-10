<function name="SetGasCansToSpawn" parent="SlashCo" type="libraryfunc">
	<description>
		Overrides the total number of gas cans to spawn for the round.<br>
		A negative value (the default) makes <page>SlashCo.SpawnGasCans</page> calculate the amount automatically instead, see <page>SlashCo.GetGasCansToSpawn</page>.
	</description>
	<realm>Shared</realm>
	<group>Generators</group>
	<args>
		<arg name="amount" type="number">Number of gas cans to spawn, or a negative number to use the automatic calculation</arg>
	</args>
</function>