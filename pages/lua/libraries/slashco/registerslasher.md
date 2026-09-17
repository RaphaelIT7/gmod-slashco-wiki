<function name="RegisterSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Registers a <page>SLASHER</page> table as a playable slasher, assigning it a unique ID.<br>
		Can only be called while slashers are being loaded, calling it afterwards raises an error.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="table" type="Slasher">The <page>SLASHER</page> table to register</arg>
		<arg name="name" type="string" optional>Name to register the slasher under. Defaults to `table.Name`</arg>
	</args>
</function>
