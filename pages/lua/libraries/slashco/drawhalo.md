<function name="DrawHalo" parent="SlashCo" type="libraryfunc">
	<description>
		Draws halos around the specified entities.<br>
		This function may only be called while SlashCo halo drawing is active.<br>
		Invalid, invisible, or dormant entities are removed from the entity list before the halos are drawn.
	</description>
	<realm>Client</realm>
	<args>
		<arg name="ents" type="table<Entity>">
			The table containing the entities to draw halos around.<br>
			Invalid, invisible, and dormant entities are removed from this table.
		</arg>
		<arg name="color" type="string|Color">
			The halo color. A color name from the global colors table or a Color object can be supplied.<br>
			Defaults to red when an invalid color is supplied.
		</arg>
		<arg name="passes" type="number" default="1" optional>The number of halo passes to draw.</arg>
		<arg name="noZ" type="boolean" default="true" optional>
			Whether the halo should ignore depth and remain visible through geometry.
		</arg>
	</args>
</function>