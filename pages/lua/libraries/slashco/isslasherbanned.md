<function name="IsSlasherBanned" parent="SlashCo" type="libraryfunc">
	<description>
		Checks if the given Slasher is banned
	</description>
	<realm>Server</realm>
	<group>Slasher</group>
	<args>
		<arg name="name" type="string">SlasherID/SlasherName</arg>
	</args>
	<rets>
		<ret name="isBanned" type="boolean">Returns `true` if the given Slasher is banned</ret>
	</rets>
</function>