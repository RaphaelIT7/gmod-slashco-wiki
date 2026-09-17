<function name="RegisterEffect" parent="SlashCo" type="libraryfunc">
	<description>
		Registers an effect table so it can be applied to players and looked up by name.<br>
		Must be called before item loading finishes; calling it afterwards throws an error.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="table" type="Effect">The <page>EFFECT</page> table to register.</arg>
		<arg name="name" type="string" optional>Name to register the effect under. Defaults to `table.Name`.</arg>
	</args>
</function>
