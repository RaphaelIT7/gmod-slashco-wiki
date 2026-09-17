<function name="GetSlasherTable" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the registered <page>SLASHER</page> table for the given slasher name.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="name" type="string">The registered name of the slasher</arg>
	</args>
	<rets>
		<ret name="slasherTbl" type="Slasher">The <page>SLASHER</page> table, or `nil` if no slasher is registered under that name</ret>
	</rets>
</function>
