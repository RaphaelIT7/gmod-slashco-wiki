<function name="CreateItemStash" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns an item stash at the specified position and angle.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="pos" type="Vector">The position where the item stash should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the item stash should be spawned with.</arg>
	</args>
	<rets>
		<ret name="entIndex" type="number">The entity index of the created item stash.</ret>
	</rets>
</function>