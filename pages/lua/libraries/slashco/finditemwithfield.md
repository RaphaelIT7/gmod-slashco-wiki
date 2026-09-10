<function name="FindItemWithField" parent="SlashCo" type="libraryfunc">
	<description>
		Finds the first registered item whose given field matches a value.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="key" type="string">Field name to check on each item table.</arg>
		<arg name="value" type="any">Value the field must equal.</arg>
	</args>
	<rets>
		<ret name="name" type="string" optional>Name of the matching item, or `nil` if none was found.</ret>
		<ret name="itemTbl" type="table" optional>The matching item table, or `nil` if none was found.</ret>
	</rets>
</function>
