<function name="BanSlasher" parent="SlashCo" type="libraryfunc">
	<description>
		Tries to ban the given Slasher
	</description>
	<realm>Server</realm>
	<args>
		<arg name="name" type="string">SlasherID/SlasherName</arg>
	</args>
	<rets>
		<ret name="banned" type="boolean">Returns `true` if the given Slasher was banned or was already banned</ret>
	</rets>
</function>