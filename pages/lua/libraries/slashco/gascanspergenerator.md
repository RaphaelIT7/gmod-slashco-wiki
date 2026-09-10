<function name="GasCansPerGenerator" parent="SlashCo" type="libraryfunc">
	<description>
		Sets how many gas cans are needed to fully fuel a single generator.
		<note>
			Due to a bug, this actually writes to the same networked value as <page>SlashCo.SetGasCansToSpawn</page> instead of the one read by <page>SlashCo.GetGasCansPerGenerator</page>, so calling it has no effect on <page>SlashCo.GetGasCansPerGenerator</page>'s return value.
		</note>
	</description>
	<realm>Shared</realm>
	<group>Generators</group>
	<args>
		<arg name="amount" type="number">Number of gas cans needed per generator</arg>
	</args>
</function>