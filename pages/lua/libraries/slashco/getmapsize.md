<function name="GetMapSize" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the current map's size multiplier, set by <page>SlashCo.SetMapSize</page> based on the map's world bounds.<br>
		Used to scale distances such as slasher spawn/range checks depending on how big the map is.
	</description>
	<realm>Shared</realm>
	<group>Map</group>
	<rets>
		<ret name="size" type="number" default="1">The map's size multiplier</ret>
	</rets>
</function>