<function name="GetItemTable" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a registered item by its name.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="name" type="string">Name of the item to retrieve.</arg>
	</args>
	<rets>
		<ret name="itemTbl" type="Item" optional>The registered <page>ITEM</page> table, or `nil` if it doesn't exist.</ret>
	</rets>
</function>
