<function name="GetSlasherTableByID" parent="SlashCo" type="libraryfunc">
	<description>
		Returns the registered <page>Slasher</page> table for the given slasher ID.
	</description>
	<realm>Shared</realm>
	<group>Slasher</group>
	<args>
		<arg name="id" type="number">The ID of the slasher, as assigned by <page>RegisterSlasher</page></arg>
	</args>
	<rets>
		<ret name="slasherTbl" type="Slasher">The <page>Slasher</page> table, or `nil` if no slasher is registered under that ID</ret>
	</rets>
</function>
