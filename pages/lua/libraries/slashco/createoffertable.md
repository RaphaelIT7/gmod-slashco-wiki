<function name="CreateOfferTable" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns the offering table at the specified position and angle.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="pos" type="Vector">The position where the offering table should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the offering table should be spawned with.</arg>
	</args>
	<rets>
		<ret name="entIndex" type="number">The entity index of the created offering table.</ret>
	</rets>
</function>