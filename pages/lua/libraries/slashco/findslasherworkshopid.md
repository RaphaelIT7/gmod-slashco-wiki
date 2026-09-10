<function name="FindSlasherWorkshopID" parent="SlashCo" type="libraryfunc">
	<description>
		Shortcut for <page>SlashCo.FindWorkshopID</page> that looks up a slasher's lua file under `lua/`.
	</description>
	<realm>Shared</realm>
	<group>Content</group>
	<args>
		<arg name="slasherFile" type="string">Path of the slasher's lua file, with or without the `.lua` extension.</arg>
	</args>
	<rets>
		<ret name="wsid" type="string">The workshop ID of the addon that contains the file, or `nil` if none was found.</ret>
		<ret name="title" type="string">The matching addon's title, or `nil` if none was found.</ret>
	</rets>
</function>