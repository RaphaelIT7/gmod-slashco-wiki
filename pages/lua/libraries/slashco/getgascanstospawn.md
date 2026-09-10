<function name="GetGasCansToSpawn" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the value set by <page>SlashCo.SetGasCansToSpawn</page>.<br>
		A negative value (the default) means no override is set, and <page>SlashCo.SpawnGasCans</page> instead calculates the amount automatically from <page>SlashCo.GetGeneratorsToSpawn</page> and <page>SlashCo.GetGasCansPerGenerator</page>.
	</description>
	<realm>Shared</realm>
	<group>Generators</group>
	<rets>
		<ret name="amount" type="number" default="-1">The overridden number of gas cans to spawn, or a negative number if unset</ret>
	</rets>
</function>