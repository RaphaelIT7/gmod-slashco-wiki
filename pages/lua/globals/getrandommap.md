<function name="GetRandomMap" parent="" type="libraryfunc">
	<description>
		Selects a random map that supports the specified number of players.<br>
		If no suitable map can be selected, this return `"error"`
	</description>
	<realm>Server</realm>
	<args>
		<arg name="plyCount" type="number">
			The number of players that need to be supported by the selected map.
		</arg>
	</args>
	<rets>
		<ret name="mapName" type="string">
			The name of a randomly selected suitable map, or `"error"` if no suitable map could be selected.
		</ret>
	</rets>
</function>