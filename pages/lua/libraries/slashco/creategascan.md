<function name="CreateGasCan" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns a gas can at the specified position and angle.<br>
		Returns `nil` if the gas can entity could not be created.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="pos" type="Vector">The position where the gas can should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the gas can should be spawned with.</arg>
	</args>
	<rets>
		<ret name="ent" type="Entity">The created gas can entity, or `nil` if creation failed.</ret>
	</rets>
</function>
