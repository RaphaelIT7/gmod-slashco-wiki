<function name="SetMapSize" parent="SlashCo" type="libraryfunc">
	<description>
		Sets the current map's size multiplier. Read back using <page>SlashCo.GetMapSize</page>.<br>
		Called serverside after the exact map size has been calculated from the map's world bounds.
	</description>
	<realm>Shared</realm>
	<group>Map</group>
	<args>
		<arg name="size" type="number">The map's size multiplier</arg>
	</args>
</function>