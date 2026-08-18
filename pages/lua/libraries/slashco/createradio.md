<function name="CreateRadio" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns a radio at the specified position and angle.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="pos" type="Vector">The position where the radio should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the radio should be spawned with.</arg>
	</args>
	<rets>
		<ret name="entIndex" type="number">The entity index of the created radio.</ret>
	</rets>
</function>