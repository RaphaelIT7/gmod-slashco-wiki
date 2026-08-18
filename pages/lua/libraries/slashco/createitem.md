<function name="CreateItem" parent="SlashCo" type="libraryfunc">
	<description>
		Spawns an item or other entity at the specified position and angle.<br>
		If an owner is supplied and is valid, the created entity is assigned to that owner.<br>
		Returns `nil` if the entity could not be created.
	</description>
	<realm>Server</realm>
	<args>
		<arg name="class" type="string">The entity class to create.</arg>
		<arg name="pos" type="Vector">The position where the entity should be spawned.</arg>
		<arg name="ang" type="Angle">The angles the entity should be spawned with.</arg>
		<arg name="owner" type="Entity" optional>The entity that should become the owner of the created entity.</arg>
	</args>
	<rets>
		<ret name="ent" type="Entity">The created entity, or `nil` if creation failed.</ret>
	</rets>
</function>