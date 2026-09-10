<function name="RegisterItem" parent="SlashCo" type="libraryfunc">
	<description>
		Registers an item table so it can be equipped, dropped and looked up by name.<br>
		Must be called before item loading finishes; calling it afterwards throws an error.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="table" type="Item">The <page>Item</page> table to register.</arg>
		<arg name="name" type="string" optional>Name to register the item under. Defaults to `table.Name`.</arg>
	</args>
</function>
