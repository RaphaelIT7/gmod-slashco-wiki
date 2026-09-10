<function name="FindWorkshopID" parent="SlashCo" type="libraryfunc">
	<description>
		Searches through every addon returned by [engine.GetAddons](https://wiki.facepunch.com/gmod/engine.GetAddons) for one that contains the given file.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="fileName" type="string">The file path to search for, e.g. `"maps/mymap.bsp"` or `"lua/myslasher.lua"`.</arg>
		<arg name="allowUnmounted" type="boolean" optional>If `true`, addons that aren't currently mounted are also checked.</arg>
	</args>
	<rets>
		<ret name="wsid" type="string">The workshop ID of the matching addon, or `nil` if none was found.</ret>
		<ret name="title" type="string">The matching addon's title, or `nil` if none was found.</ret>
	</rets>
</function>