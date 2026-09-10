<function name="FindMapWorkshopID" parent="SlashCo" type="libraryfunc">
	<description>
		Shortcut for <page>SlashCo.FindWorkshopID</page> that looks up a map's `.bsp` file under `maps/`.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="mapName" type="string">Name of the map, with or without the `.bsp` extension.</arg>
		<arg name="allowUnmounted" type="boolean" optional>If `true`, addons that aren't currently mounted are also checked.</arg>
	</args>
	<rets>
		<ret name="wsid" type="string">The workshop ID of the addon that contains the map, or `nil` if none was found.</ret>
		<ret name="title" type="string">The matching addon's title, or `nil` if none was found.</ret>
	</rets>
</function>