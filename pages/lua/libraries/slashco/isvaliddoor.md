<function name="IsValidDoor" parent="SlashCo" type="libraryfunc">
	<description>
		Checks whether the given entity is a valid SlashCo door, i.e. it is valid and its class is `prop_door_rotating` or `func_door_rotating` (see `SlashCo.ValidDoors`).
	</description>
	<realm>Shared</realm>
	<group>Doors</group>
	<args>
		<arg name="ent" type="Entity">The entity to check.</arg>
	</args>
	<rets>
		<ret name="isValid" type="boolean">`true` if the entity is a valid door.</ret>
	</rets>
</function>