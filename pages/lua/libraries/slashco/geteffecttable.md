<function name="GetEffectTable" parent="SlashCo" type="libraryfunc">
	<description>
		Returns a registered effect by its name.
	</description>
	<realm>Shared</realm>
	<group>Items</group>
	<args>
		<arg name="name" type="string">Name of the effect to retrieve.</arg>
	</args>
	<rets>
		<ret name="effectTbl" type="Effect" optional>The registered <page>Effect</page> table, or `nil` if it doesn't exist.</ret>
	</rets>
</function>
