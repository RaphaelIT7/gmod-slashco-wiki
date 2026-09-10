<function name="GetItemByEntity" parent="SlashCo" type="libraryfunc">
	<description>
		Finds the name of a registered item by its entity class.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="class" type="string">The entity class to search for.</arg>
	</args>
	<rets>
		<ret name="name" type="string" optional>Name of the matching item, or `nil` if none was found.</ret>
	</rets>
</function>
