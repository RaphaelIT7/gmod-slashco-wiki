<function name="CreateHelicopter" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns the helicopter at the specified position and angle.<br>
		Returns `nil` if the helicopter entity could not be created.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="pos" type="Vector">The position where the helicopter should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the helicopter should be spawned with.</arg>
	</args>
	<rets>
		<ret name="ent" type="Entity">The created helicopter entity, or `nil` if creation failed.</ret>
	</rets>
</function>